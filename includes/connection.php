<?php

$host = "localhost";
//username and password should be change accordingly
$user = "soaresj"; 
$pass = "Hit@326 "; 
//Database name will be addded once database is created
$dbname = "";

try
{
    $pdo = new PDO('mysql:host='.$host.';dbname='.$dbname, .$user .$pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec('SET NAMES "utf8"');
    }
    catch (PDOException $e)
    {
    $error = 'Unable to connect to the database server.';
    include 'error.html.php';
    exit();
}

?>
