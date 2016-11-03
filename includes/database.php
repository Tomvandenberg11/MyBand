<?php 

// Set up database connection
// See http://www.php.net/manual/en/book.mysqli.php

$mysqli = new mysqli('localhost', 'root', '', 'workbench');
//$mysqli = new mysqli('localhost', '21897', 'fzikzqoc', '21897_world');

if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: 
    (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

//echo $mysqli->host_info . "<hr>";


