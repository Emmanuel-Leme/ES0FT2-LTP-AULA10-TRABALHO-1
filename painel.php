<?php
session_start();

if (!isset($_SESSION['logado']) || $_SESSION['logado'] !== true) {
    header('Location: login.html');
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Painel</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <div class="caixa">
        <h2>Bem-vindo, <?= htmlspecialchars($_SESSION['usuario']) ?>!</h2>
        <a href="logout.php">Sair</a>
    </div>
</body>
</html>
