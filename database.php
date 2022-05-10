<?php
$host = "localhost";
$dbname = "jason";
$user = "alexya";
$pass = "lasheryfadu05";

try {
  $db_connect = new PDO("mysql:host=" . $host . ";dbname=" . $dbname, $user, $pass);
}
catch (PDOException $e) {
    die("Erreur en se connectant à la BD: " . $e->getMessage());
}
