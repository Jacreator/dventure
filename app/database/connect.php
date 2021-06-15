<?php

// $host = 'eu-cdbr-west-01.cleardb.com';
// $user = 'b13959495f0da9';
// $pass = 'aa195a45';
// $db_name = 'dventure';

// mysql://b13959495f0da9:aa195a45@eu-cdbr-west-01.cleardb.com/heroku_b8f88a3745026db?reconnect=true

// $conn = new MySQLi($host, $user, $pass, $db_name);

//Get Heroku ClearDB connection information
$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server = $cleardb_url["host"];
$cleardb_username = $cleardb_url["user"];
$cleardb_password = $cleardb_url["pass"];
$cleardb_db = substr($cleardb_url["path"],1);
$active_group = 'default';
$query_builder = TRUE;

// Connect to DB
$conn = new MySQLi($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);

if ($conn->connect_error) {
    die('Database connection error: ' . $conn->connect_error);
}
