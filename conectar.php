<?php
$dbhost = "198.91.81.5";
$dbuser = "prefilax_alvaro";
$dbpass = "PrEfIlA_1";
$dbname = "prefilax_consultas";
try{
    $db = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'"));
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch (Exception $error){
    die("Error conexión BBDD " . $error->getMessage());
}
?>
