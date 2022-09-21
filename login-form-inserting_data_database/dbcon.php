<?php

$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'form-input';

$conn = mysqli_connect($hostname, $username, $password, $dbname);

if(!$conn){
    echo "Error: Could not connect to the server";
}