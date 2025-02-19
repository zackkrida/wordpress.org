<?php
namespace WordPressdotorg\Theme_Directory\Lib;

/**
 * Simple `exec()` wrappers which add error reporting to WordPress.org.
 *
 * @package WordPressdotorg\Theme_Directory\Lib
 */
trait Exec_With_Logging {

	/**
	 * Execute a shell process, same behaviour as `exec()` but with PHP Warnings/Notices generated on errors.
	 * 
	 * @param string $command    Command to execute. Escape it.
	 * @param array  $output     Array to append program output to. Passed by reference.
	 * @param int    $return_var The commands return value. Passed by reference.
	 * 
	 * @return false|string False on failure, last line of output on success, as per exec().
	 */
	public static function exec( $command, &$output = null, &$return_var = null ) {
		$proc = proc_open(
			$command,
			[
				1 => [ 'pipe', 'w' ], // STDOUT
				2 => [ 'pipe', 'w' ], // STDERR
			],
			$pipes
		);

		if ( ! $proc ) {
			return false;
		}

		$stdout = stream_get_contents( $pipes[1] );
		$stderr = stream_get_contents( $pipes[2] );
		fclose( $pipes[1] );
		fclose( $pipes[2] );

		$return_var = proc_close( $proc );

		// Append to $output, as `exec()` does.
		if ( ! is_array( $output ) ) {
			$output = [];
		}
		if ( $stdout ) {
			$output = array_merge( $output, explode( "\n", rtrim( $stdout, "\r\n" ) ) );
		}

		// Redact any passwords that might be in a command and included in logged errors.
		$command = str_replace( [ THEME_TRACBOT_PASSWORD, THEME_DROPBOX_PASSWORD ], '[redacted]', $command );

		if ( $return_var > 0 ) {
			trigger_error(
				"Command failed, `{$command}`\n" .
					"```\n" .
					"Return Value: {$return_var}\n" .
					"STDOUT: {$stdout}\n" .
					"STDERR: {$stderr}\n" .
					"```",
				E_USER_WARNING
			);
		} elseif ( $stderr ) {
			trigger_error(
				"Command produced errors, `{$command}`\n" .
					"```\n" .
					"Return Value: {$return_var}\n" .
					"STDOUT: {$stdout}\n" .
					"STDERR: {$stderr}\n" .
					"```",
				E_USER_NOTICE
			);
		}

		// Execution failed.
		if ( $return_var > 0 ) {
			return false;
		}

		// Successful, return the last output line.
		return $stdout ? end( $output ) : '';
	}

	/**
	 * Execute a shell process, same behaviour as `shell_exec()` but with PHP Warnings/Notices generated on errors.
	 * 
	 * @param string $command Command to execute. Escape it.
	 * 
	 * @return false|string False on failure, output on success, mostly per shell_exec().
	 */
	public static function shell_exec( $command ) {
		$output     = [];
		$return_var = 0;
		$return = self::exec( $command, $output, $return_var );

		// Diverge from shell_exec(): return false for any error.
		if ( $return_var > 0 || false === $return || ! $output ) {
			return false;
		}

		return implode( "\n", $output );
	}
}
