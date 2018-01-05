<?php
/**
 * Global Configuration Override
 *
 * You can use this file for overriding configuration values from modules, etc.
 * You would place values in here that are agnostic to the environment and not
 * sensitive to security.
 *
 * @NOTE: In practice, this file will typically be INCLUDED in your source
 * control, so do not include passwords or other sensitive information in this
 * file.
 */

//echo '<pre>'.realpath(getcwd()).'/data/zftutorial.db</pre>';die;

// MySQL
$dbname = 'project_z3';
$host   = 'localhost';
$port   = '3306';
$dsnMySQL = 'mysql:dbname='.$dbname.';host='.$host.';';
//$dsnMySQL = 'mysql:dbname='.$dbname.';host='.$host.';port='.$port;

// MySQL
return [    
    'db' => [
        'driver' => 'Pdo',
        'dsn'    => $dsnMySQL
    ],    
];
/*

// PostgeSQL
$dbname = 'projectz3';
$host   = 'localhost';
$port   = '5432';
$dsnPGSQL = 'pgsql:dbname='.$dbname.';host='.$host.';port='.$port;

// PostgreSQL
return [    
    'db' => [
        'driver' => 'pdo_pgsql',
        'dsn'    => $dsnPGSQL
    ],    
];

// SQLITE
return [
    'db' => [
        'driver' => 'pdo_sqlite',
        'dsn'    => sprintf('sqlite:$s/data/zftutorial.db', realpath(getcwd()))
    ],
];
*/