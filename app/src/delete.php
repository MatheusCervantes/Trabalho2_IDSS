<?php
include 'db.php';

$id = $_GET['id'];

$sql = "DELETE FROM carros WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header('Location: index.php');
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
