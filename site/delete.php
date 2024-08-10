<?php
include 'db_connect.php';
session_start();

$id = $_GET['id'];

$sql = "DELETE FROM jogos WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    $_SESSION['message'] = "Jogo deletado com sucesso";
} else {
    $_SESSION['message'] = "Erro ao deletar jogo: " . $conn->error;
}

$conn->close();
header('Location: index.php');
exit();
?>
