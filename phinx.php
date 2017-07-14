<?php

require __DIR__ . '/vendor/autoload.php';

$db = include __DIR__ . '/config/db.php';
$db = $db['development'];

return [
	'paths' => [
		'migrations' => [
			__DIR__ . '/db/migrations'
		],
		'seeds' => [
			__DIR__ . '/db/seeds'
		]
	],
	'environments' => [
		'default_migration_table' => 'migrations',
		'default_database' => 'development',
		'development' => [
			'adapter' => $db['driver'],
			'host' => $db['host'],
			'name' => $db['database'],
			'user' => $db['username'],
			'pass' => $db['password'],
			'charset' => $db['charset'],
			'collation' => $db['collation']
		]
	]
];