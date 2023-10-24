<?php
$servname = 'localhost';
$dbname = 
'biblioclic';
$user = 'root';
$pass = '';
try{
    $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
    $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);}

catch(PDOException $e){
        echo "Erreur : " . $e->getMessage();
        }