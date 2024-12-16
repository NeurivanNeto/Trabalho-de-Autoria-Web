<?php
// Verificar se o formulário foi enviado via POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Receber os dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $idade = $_POST['idade'];
} else {
    // Se o formulário não for enviado, redireciona para o formulário
    header('Location: formulario.html');
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados Cadastrados</title>
</head>
<body>
    <header>
        <h1>Dados Cadastrados</h1>
    </header>

    <main>
        <h2>Obrigado pelo cadastro!</h2>

        <p><strong>Nome:</strong> <?php ($nome); ?></p>
        <p><strong>Email:</strong> <?php ($email); ?></p>
        <p><strong>Idade:</strong> <?php($idade); ?> anos</p>
    </main>
</body>
</html>
