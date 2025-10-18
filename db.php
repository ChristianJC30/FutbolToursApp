<?php
$servername = "localhost";
$username = "root";
$password = "12345";
$database = "FutbolTours";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
  die("Error de conexión: " . $conn->connect_error);
}
?>