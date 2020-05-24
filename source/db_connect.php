<?php

$username = 'root';
$passowrd = '';
$dsn = 'mysql:host=localhost; dbname=mydb';

try {
    $conn = new PDO($dsn, $username, $passowrd);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    echo "Connection Failed".$e->getMessage();
} 


?>