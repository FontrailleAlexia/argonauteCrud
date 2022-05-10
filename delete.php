<?php
// BDD File
require "database.php";

$id = $_GET['id'];
$sql = "DELETE FROM `argonautes` WHERE id=:id";
$res = $db_connect->prepare($sql);

if ($res->execute([':id' => $id])) {
    header("Location: /argonaute/");
}
