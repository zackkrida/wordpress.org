<?php

class WP_50_Credits extends WP_Credits {

	public function groups() {
		$groups = [
			'core-developers'         => [
				'name'    => 'Noteworthy Contributors',
				'type'    => 'titles',
				'shuffle' => false,
				'data'    => [
					'matt'             => [ 'Matt Mullenweg', 'Release Lead' ],
					'allancole'        => [ 'Allan Cole', 'Release Lead' ],
					'antpb'            => [ 'Anthony Burchell', 'Release Lead' ],
					'pento'            => [ 'Gary Pendergast', 'Release Lead' ],
					'chanthaboune'     => [ 'Josepha Haden Chomphosy', 'Release Lead' ],
					'laurelfulford'    => [ 'Laurel Fulford', 'Release Lead' ],
					'omarreiss'        => [ 'Omar Reiss', 'Release Lead' ],
					'danielbachhuber'  => [ 'Daniel Bachhuber', 'Release Lead' ],
					'matveb'           => [ 'Matías Ventura', 'Release Lead' ],
					'mcsf'             => [ 'Miguel Fonseca', 'Release Lead' ],
					'karmatosed'       => [ 'Tammie Lister', 'Release Lead' ],
					'lonelyvegan'      => [ 'Matthew Riley MacPherson', 'Release Lead' ],
					'adamsilverstein'  => [ 'Adam Silverstein', 'Core Developer' ],
					'afercia'          => [ 'Andrea Fercia', 'Core Developer' ],
					'aduth'            => [ 'Andrew Duthie', 'Core Developer' ],
					'bpayton'          => [ 'Brandon Payton', 'Core Developer' ],
					'gziolo'           => [ 'Grzegorz Ziółkowski', 'Core Developer' ],
					'iseulde'          => [ 'Ella Iseulde Van Dorpe', 'Core Developer' ],
					'Joen'             => [ 'Joen Asmussen', 'Core Developer' ],
					'jorgefilipecosta' => [ 'Jorge Costa', 'Core Developer' ],
					'talldanwp'        => [ 'Daniel Richards', 'Core Developer' ],
					'youknowriad'      => [ 'Riad Benguella', 'Core Developer' ],
					'noisysocks'       => [ 'Robert Anderson', 'Core Developer' ],
					'desrosj'          => [ 'Jonathan Desrosiers', 'Core Developer' ],
					'netweb'           => 'Stephen Edgar',
					'JoshuaWold'       => 'Joshua Wold',
					'chrisvanpatten'   => 'Chris Van Patten',
					'notnownikki'      => 'Nicola Heald',
					'mkaz'             => 'Marcus Kazmierczak',
					'dmsnell'          => 'Dennis Snell',
				],
			],
			'contributing-developers' => [
				'name'    => false,
				'type'    => 'titles',
				'shuffle' => true,
				'data'    => [
					'davidakennedy' => 'David Kennedy',
					'atimmer'       => 'Anton Timmermans',
					'melchoyce'     => 'Mel Choyce',
					'herregroen'    => 'Herre Groen',
					'peterwilsoncc' => 'Peter Wilson',
					'jorbin'        => 'Aaron Jorbin',
					'kadamwhite'    => 'K.Adam White',
					'ocean90'       => 'Dominik Schilling',
					'DrewAPicture'  => 'Drew Jaynes',
					'flixos90'      => 'Felix Arntz',
					'johnbillion'   => 'John Blackbourn',
					'boonebgorges'  => 'Boone Gorges',
					'joemcgill'     => 'Joe McGill',
					'mikeschroder'  => 'Mike Schroder',
					'kjellr'        => 'Kjell Reigstad',
				],
			],
		];

		return $groups;
	}

	public function props() {
		return [
			'0mirka00',
			'abdullahramzan',
			'abdulwahab610',
			'abhijitrakas',
			'adamsilverstein',
			'aduth',
			'afercia',
			'afraithe',
			'ahmadawais',
			'airathalitov',
			'ajitbohra',
			'akirk',
			'albertomedina',
			'aldavigdis',
			'alexis',
			'alexislloyd',
			'alexsanford1',
			'allancole',
			'amedina',
			'ameeker',
			'andreamiddleton',
			'andreiglingeanu',
			'andrewserong',
			'andrewtaylor-1',
			'androb',
			'anevins',
			'annaharrison',
			'antpb',
			'apeatling',
			'aprakasa',
			'arnaudban',
			'arshidkv12',
			'artisticasad',
			'arush',
			'asvinballoo',
			'atanasangelovdev',
			'atimmer',
			'audrasjb',
			'azaozz',
			'azchughtai',
			'b-07',
			'babaevan',
			'babbardel',
			'bandonrandon',
			'bcolumbia',
			'belcherj',
			'benjamin_zekavica',
			'benlk',
			'bernhard-reiter',
			'betsela',
			'bhargavmehta',
			'birgire',
			'blowery',
			'bobbingwide',
			'boblinthorst',
			'boemedia',
			'boonebgorges',
			'bordoni',
			'bpayton',
			'bph',
			'bradyvercher',
			'brentswisher',
			'briannaorg',
			'bronsonquick',
			'burhandodhy',
			'butimnoexpert',
			'buzztone',
			'cantothemes',
			'cathibosco',
			'caxco93',
			'chanthaboune',
			'charlestonsw',
			'chetan200891',
			'chetansatasiya',
			'chopinbach',
			'chouby',
			'chriskmnds',
			'chrisl27',
			'christophherr',
			'chrisvanpatten',
			'circlecube',
			'claudiosanches',
			'clorith',
			'codebykat',
			'coderkevin',
			'copons',
			'courtney0burton',
			'crunnells',
			'csabotta',
			'danielbachhuber',
			'danielhw',
			'danieltj',
			'daniloercoli',
			'dannycooper',
			'davemoran118',
			'davidakennedy',
			'davidbinda',
			'davidherrera',
			'davidsword',
			'davisshaver',
			'dcavins',
			'dciso',
			'dd32',
			'delawski',
			'dency',
			'desideveloper',
			'designsimply',
			'desrosj',
			'deviodigital',
			'dfangstrom',
			'dhanendran',
			'diegoliv',
			'diegoreymendez',
			'dimadin',
			'dingo_bastard',
			'dixitadusara',
			'dlh',
			'dlocc',
			'dmsnell',
			'donnapep',
			'doomwaxer',
			'drewapicture',
			'dryanpress',
			'dsawardekar',
			'dsifford',
			'dsmart',
			'duanestorey',
			'earnjam',
			'edpittol',
			'ehg',
			'electricfeet',
			'eliorivero',
			'elrae',
			'enodekciw',
			'ephoxjames',
			'ephoxmogran',
			'epointal',
			'ericnmurphy',
			'etoledom',
			'euthelup',
			'fabiankaegy',
			'fabs_pim',
			'faishal',
			'fierevere',
			'flixos90',
			'floriansimeth',
			'folletto',
			'foobar4u',
			'foreverpinetree',
			'frank-klein',
			'fuyuko',
			'garrett-eclipse',
			'garyj',
			'garyjones',
			'georgeh',
			'georgestephanis',
			'giventofly76',
			'gma992',
			'gnif',
			'goldsounds',
			'gonzomir',
			'grappler',
			'grapplerulrich',
			'greatislander',
			'greg-raven',
			'gwwar',
			'gziolo',
			'hardeepasrani',
			'hblackett',
			'hedgefield',
			'helen',
			'herbmiller',
			'herregroen',
			'hideokamoto',
			'hugobaeta',
			'hypest',
			'ianbelanger',
			'iandunn',
			'ianstewart',
			'icaleb',
			'idpokute',
			'ieatwebsites',
			'igorsch',
			'imath',
			'imonly_ik',
			'intronic',
			'ipstenu',
			'ireneyoast',
			'iseulde',
			'ismailelkorchi',
			'israelshmueli',
			'itowhid06',
			'ixkaito',
			'j-falk',
			'jagnew',
			'jahvi',
			'jakept',
			'jamestryon',
			'jamiehalvorson',
			'janalwin',
			'jaswrks',
			'jblz',
			'jbpaul17',
			'jd55',
			'jdembowski',
			'jdgrimes',
			'jdtrower',
			'jeffpaul',
			'jeremyfelt',
			'jhoffm34',
			'jipmoors',
			'jnylen0',
			'joedolson',
			'joehoyle',
			'joemaller',
			'joemcgill',
			'joen',
			'johnbillion',
			'johndyer',
			'johnjamesjacoby',
			'johnny5',
			'johnpixle',
			'johnwatkins0',
			'jomurgel',
			'jonsurrell',
			'joostdevalk',
			'jorbin',
			'jorgefilipecosta',
			'joshuawold',
			'joyously',
			'jrf',
			'jryancard',
			'jsnajdr',
			'julienmelissas',
			'jvisick77',
			'kadamwhite',
			'kallehauge',
			'kalpshit',
			'karmatosed',
			'kau-boy',
			'ketuchetan',
			'kevinwhoffman',
			'khleomix',
			'kjellr',
			'kluny',
			'koke',
			'kopepasah',
			'kraftbj',
			'krutidugade',
			'lamosty',
			'lancewillett',
			'laurelfulford',
			'leahkoerper',
			'littlebigthing',
			'lloyd',
			'loicblascos',
			'lonelyvegan',
			'lucaskowalski',
			'lucasrolff',
			'lucasstark',
			'luehrsen',
			'luigipulcini',
			'lukecavanagh',
			'lukepettway',
			'luminus',
			'lynneux',
			'm-e-h',
			'macbookandrew',
			'maedahbatool',
			'magicroundabout',
			'mahdiyazdani',
			'mahmoudsaeed',
			'mapk',
			'marina_wp',
			'mariusvw',
			'markjaquith',
			'martinlugton',
			'mathiu',
			'matt',
			'mattgeri',
			'mattheu',
			'matveb',
			'maurobringolf',
			'maximebj',
			'mayukojpn',
			'mboynes',
			'mcsf',
			'mdawaffe',
			'meetjey',
			'melchoyce',
			'mendezcode',
			'michaelhull',
			'mihai2u',
			'mihaivalentin',
			'mike-haydon-swo',
			'mikehaydon',
			'mikeschroder',
			'mikeselander',
			'mikeyarce',
			'milana_cap',
			'milesdelliott',
			'mimo84',
			'mirucon',
			'mitogh',
			'mizejewski',
			'mkaz',
			'mmaumio',
			'mmtr86',
			'mnelson4',
			'mor10',
			'mostafas1990',
			'motleydev',
			'mpheasant',
			'mrahmadawais',
			'mrasharirfan',
			'mrmadhat',
			'mrwweb',
			'msdesign21',
			'mtias',
			'mukesh27',
			'munirkamal',
			'mypacecreator',
			'mzorz',
			'nagayama',
			'nao',
			'napy84',
			'nateconley',
			'nativeinside',
			'nbachiyski',
			'nerrad',
			'netweb',
			'nfmohit',
			'nicbertino',
			'nielslange',
			'nikschavan',
			'nitrajka',
			'njpanderson',
			'noisysocks',
			'nosolosw',
			'notlaura',
			'notnownikki',
			'nshki',
			'obenland',
			'ocean90',
			'octalmage',
			'omarreiss',
			'oskosk',
			'otto42',
			'pareshradadiya-1',
			'pauldechov',
			'paulstonier',
			'paulwilde',
			'pbearne',
			'pedromendonca',
			'pento',
			'peterwilsoncc',
			'pglewis',
			'piersb',
			'pilou69',
			'pixelverbieger',
			'poena',
			'postphotos',
			'potbot',
			'pratikthink',
			'presskopp',
			'pross',
			'prtksxna',
			'psealock',
			'ptasker',
			'rachelbaker',
			'rachelmcr',
			'rahmohn',
			'rahmon',
			'rahulsprajapati',
			'rakshans1',
			'ramonopoly',
			'revgeorge',
			'rianrietveld',
			'richsalvucci',
			'richtabor',
			'riddhiehta02',
			'rileybrook',
			'rmccue',
			'robertsky',
			'rohittm',
			'ryelle',
			'ryo511',
			'sagarprajapati',
			'samikeijonen',
			'sanchothefat',
			'schlessera',
			'scottmweaver',
			'sephsekla',
			'sergeybiryukov',
			'sergioestevao',
			'sewmyheadon',
			'shaileesheth',
			'sharaz',
			'shaunandrews',
			'shelob9',
			'shenkj',
			'shooper',
			'sikander',
			'simison',
			'siriokun',
			'sirjonathan',
			'sirreal',
			'sisanu',
			'skithund',
			'skorasaurus',
			'smyoon315',
			'soean',
			'somtijds',
			'soulseekah',
			'spacedmonkey',
			'spocke',
			'ssousa',
			'sstoqnov',
			'stagger-lee',
			'stevehenty',
			'strategio',
			'stuartfeldt',
			'stubgo',
			'subrataemfluence',
			'sumobi',
			'swissspidy',
			'tacrapo',
			'talldan',
			'tammie_l',
			'technosiren',
			'tfrommen',
			'themeroots',
			'thrijith',
			'timgardner',
			'timmydcrawford',
			'timothyblynjacobs',
			'tinkerbelly',
			'tjfunke001',
			'tjnowell',
			'tlxo',
			'tmatsuur',
			'tobifjellner',
			'toro_unit',
			'torontodigits',
			'travel_girl',
			'travislopes',
			'truongwp',
			'twoelevenjay',
			'tyrannous',
			'tyxla',
			'vaishalipanchal',
			'vengisss',
			'vindl',
			'vishalkakadiya',
			'volodymyrkolesnykov',
			'vtrpldn',
			'walterebert',
			'warmarks',
			'webdevmattcrom',
			'webmandesign',
			'websupporter',
			'welcher',
			'westonruter',
			'williampatton',
			'willybahuaud',
			'wizzard_',
			'woodent',
			'wpscholar',
			'xkon',
			'xyfi',
			'yahil',
			'yingles',
			'yingling017',
			'yoavf',
			'youknowriad',
			'youthkee',
			'ze3kr',
			'zebulan',
			'ziyaddin',
			'_dorsvenabili',
		];
	}

	public function external_libraries() {
		return [
			[ 'Babel Polyfill', 'https://babeljs.io/docs/en/babel-polyfill' ],
			[ 'Backbone.js', 'http://backbonejs.org/' ],
			[ 'Class POP3', 'https://squirrelmail.org/' ],
			[ 'Closest', 'https://github.com/jonathantneal/closest' ],
			[ 'CodeMirror', 'https://codemirror.net/' ],
			[ 'Color Animations', 'https://plugins.jquery.com/color/' ],
			[ 'getID3()', 'http://getid3.sourceforge.net/' ],
			[ 'FormData', 'https://github.com/jimmywarting/FormData' ],
			[ 'Horde Text Diff', 'https://pear.horde.org/' ],
			[ 'hoverIntent', 'http://cherne.net/brian/resources/jquery.hoverIntent.html' ],
			[ 'imgAreaSelect', 'http://odyniec.net/projects/imgareaselect/' ],
			[ 'Iris', 'https://github.com/Automattic/Iris' ],
			[ 'jQuery', 'https://jquery.com/' ],
			[ 'jQuery UI', 'https://jqueryui.com/' ],
			[ 'jQuery Hotkeys', 'https://github.com/tzuryby/jquery.hotkeys' ],
			[ 'jQuery serializeObject', 'http://benalman.com/projects/jquery-misc-plugins/' ],
			[ 'jQuery.query', 'https://plugins.jquery.com/query-object/' ],
			[ 'jQuery.suggest', 'https://github.com/pvulgaris/jquery.suggest' ],
			[ 'jQuery UI Touch Punch', 'http://touchpunch.furf.com/' ],
			[ 'json2', 'https://github.com/douglascrockford/JSON-js' ],
			[ 'Lodash', 'https://lodash.com/' ],
			[ 'Masonry', 'http://masonry.desandro.com/' ],
			[ 'MediaElement.js', 'http://mediaelementjs.com/' ],
			[ 'Moment', 'http://momentjs.com/' ],
			[ 'PclZip', 'http://www.phpconcept.net/pclzip/' ],
			[ 'PemFTP', 'https://www.phpclasses.org/package/1743-PHP-FTP-client-in-pure-PHP.html' ],
			[ 'phpass', 'http://www.openwall.com/phpass/' ],
			[ 'PHPMailer', 'https://github.com/PHPMailer/PHPMailer' ],
			[ 'Plupload', 'http://www.plupload.com/' ],
			[ 'random_compat', 'https://github.com/paragonie/random_compat' ],
			[ 'React', 'https://reactjs.org/' ],
			[ 'Redux', 'https://redux.js.org/' ],
			[ 'Requests', 'http://requests.ryanmccue.info/' ],
			[ 'SimplePie', 'http://simplepie.org/' ],
			[ 'The Incutio XML-RPC Library', 'http://scripts.incutio.com/xmlrpc/' ],
			[ 'Thickbox', 'http://codylindley.com/thickbox/' ],
			[ 'TinyMCE', 'https://www.tinymce.com/' ],
			[ 'Twemoji', 'https://github.com/twitter/twemoji' ],
			[ 'Underscore.js', 'http://underscorejs.org/' ],
			[ 'whatwg-fetch', 'https://github.com/github/fetch' ],
			[ 'zxcvbn', 'https://github.com/dropbox/zxcvbn' ],
		];
	}
}

