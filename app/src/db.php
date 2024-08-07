<?php
$servername = "db";
$username = "root";
$password = "senha_da_nasa";
$dbname = "carrosDB";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>
