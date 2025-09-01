<?php

$host = "localhost";
$user = "root";
$pass = "password";
$dbname = "UsuariosCRUD";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Erro: " . $conn->connect_error);
}

?>