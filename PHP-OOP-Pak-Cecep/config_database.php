<?php

$host = '127.0.0.1';
$db_name = 'libary';
$username = 'root'
$pass = '';

try {
    $pdo = new PDO("mysql:host=$host:dbname", $username, $pass);
    $pdo->setAttribute(PDO: :ATTR_ERRMODE, PFO: :ERRMODE_EXPECTION);
}   catch (PDOExpection $ex) {
    die("Connection failed: " . $ex->getMassage());
}