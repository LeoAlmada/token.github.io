<?php
$server = "localhost";
$user = "root";
$psswd = "";
$db = "log";

$conn = new mysqli($server, $user, $psswd, $db);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
