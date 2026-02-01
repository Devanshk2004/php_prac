<?php

$host = '127.0.0.1';
$port = '3307';
$dbname = 'myfirstdatabase';
$dbusername = 'root';
$dbpassword = '';

try{
    $dsn = "mysql:host=$host;port=$port;dbname=$dbname";
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
}catch(PDOException $e){
    die("Connection failed: ". $e->getMessage());
}

 