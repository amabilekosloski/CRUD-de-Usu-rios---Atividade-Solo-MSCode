<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
require_once __DIR__ . '/../database/db.php';
if(isset($_POST['create_action'])) {
    $nome = mysqli_real_escape_string($conn, trim($_POST['nome']));
    $email = mysqli_real_escape_string($conn, trim($_POST['email']));
    $data_nascimento = mysqli_real_escape_string($conn, trim($_POST['data_nascimento']));
    $senha = isset($_POST['senha']) ? mysqli_real_escape_string($conn, trim($_POST['senha'])) : '';
    $sql = "INSERT INTO usuarios(nome, email, data_nascimento, senha) VALUES ('$nome', '$email', '$data_nascimento', '$senha')";
    if(mysqli_query($conn, $sql)) {
        $_SESSION['message'] = "Usuário criado com sucesso!";
    } else {
        $_SESSION['message'] = "Erro ao criar usuário: " . mysqli_error($conn);
    }
    header("Location: index.php");
    exit;
}
?>