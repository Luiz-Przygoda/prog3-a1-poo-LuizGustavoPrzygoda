<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = htmlspecialchars(trim($_POST['nome']));
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $senha = htmlspecialchars(trim($_POST['senha']));

    if (empty($nome) || empty($email) || empty($senha)) {
        die("Por favor, preencha todos os campos corretamente.");
    }

    $_SESSION['nome'] = $nome;
    
    // Cookie corrigido:
    setcookie('email', $email, [
        'expires' => time() + (30 * 24 * 60 * 60), // 30 dias
        'path' => '/', // Disponível em todo o site
        'secure' => isset($_SERVER['HTTPS']), // Auto-detecção de HTTPS
        'httponly' => true, // Acessível apenas via HTTP
        'samesite' => 'Lax' // Segurança contra CSRF
    ]);

    header("Location: welcome.php");
    exit;
} else {
    header("Location: index.php");
    exit;
}