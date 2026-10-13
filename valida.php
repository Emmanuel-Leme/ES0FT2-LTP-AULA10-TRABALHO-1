<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: login.html');
    exit;
}

$usuario = $_POST['usuario'] ?? '';
$senha   = $_POST['senha'] ?? '';

if ($usuario === 'admin' && $senha === '1234') {
    $_SESSION['logado']  = true;
    $_SESSION['usuario'] = $usuario;
    header('Location: painel.php');
    exit;
} else {
    header('Location: login.html');
    exit;
}
