<?php

$isFortrabbit = getenv('MYSQL_USER');

if($isFortrabbit){
    // --- FORTRABBIT ---
    $host = getenv('MYSQL_HOST');
    $port = getenv('MYSQL_PORT');
    $host = "$host:$port";
    $user = getenv('MYSQL_USER');
    $password = getenv('MYSQL_PASSWORD');
    $database = getenv('MYSQL_DATABASE');
} else {
    // --- LOCAL ---
    $host = 'localhost:3306';
    $database = 'evote';
    $user = 'root';
    $password = 'passpass';
}

define('DB_HOST', $host);
define('DB_USER', $user);
define('DB_PASS', $password);
define('DB_NAME', $database);

