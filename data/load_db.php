<?php

/*
$file = realpath(__DIR__) . '/zftutorial.db';
$dsn = 'sqlite:' . $file;

$db = new PDO($dsn);
$fh = fopen(__DIR__ . '/schema.sql', 'r');

while ($line = fread($fh, 4096)) {
    $db->exec($line);
}
fclose($fh);
*/

$dbname = 'projectz3';
$host   = 'localhost';
$port   = '5432';

$dbuser = 'postgres';
$dbpass = 'root';

$dsn = 'pgsql:dbname='.$dbname.';host='.$host.';port='.$port;

$db = new PDO($dsn, $dbuser, $dbpass);