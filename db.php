<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'scholarship');

// Attempt to connect ot mysql database
$mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check the connection
if ($mysqli === false) {
    die("ERROR: Could not connect." . $mysqli->connect_error);
}
 
?>