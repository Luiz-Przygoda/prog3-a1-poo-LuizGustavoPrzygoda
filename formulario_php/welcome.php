<?php
session_start();

if (!isset($_SESSION['nome'])) {
    header("Location: index.php");
    exit;
}

$nome = htmlspecialchars($_SESSION['nome']);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Bem-vindo</title>
    <style>
        body {
            margin: 0;
            height: 100vh;
            background: linear-gradient(120deg, #6a11cb, #2575fc);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            position: relative;
        }

        /* Formas no fundo */
        .circle {
            position: absolute;
            border-radius: 50%;
            opacity: 0.25;
            z-index: 0;
        }

        .circle1 {
            width: 400px;
            height: 400px;
            background: #8e44ad;
            top: -100px;
            left: -100px;
        }

        .circle2 {
            width: 300px;
            height: 300px;
            background: #9b59b6;
            bottom: -80px;
            right: -80px;
        }

        .circle3 {
            width: 200px;
            height: 200px;
            background: #6dd5ed;
            top: 50%;
            left: 70%;
            transform: translate(-50%, -50%);
        }

        .container {
            z-index: 1;
            background: rgba(255, 255, 255, 0.95);
            padding: 40px 50px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            text-align: center;
            max-width: 400px;
            width: 100%;
        }

        h1 {
            margin-bottom: 20px;
            color: #333;
        }

        p {
            color: #555;
            margin-bottom: 30px;
        }

        a {
            background-color: #6a11cb;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            text-decoration: none;
            font-size: 16px;
            transition: background 0.3s ease;
            display: inline-block;
        }

        a:hover {
            background-color: #4e0ca1;
        }

        .footer {
            margin-top: 30px;
            font-size: 12px;
            color: #555;
        }
    </style>
</head>
<body>
    <!-- Formas decorativas -->
    <div class="circle circle1"></div>
    <div class="circle circle2"></div>
    <div class="circle circle3"></div>

    <!-- Conteúdo principal -->
    <div class="container">
        <h1>Olá, <?= $nome ?>!</h1>
        <p>Seja bem-vindo(a) ao sistema.</p>
        <a href="logout.php">Sair</a>
        <div class="footer">Sistema com Sessões e Cookies | PHP</div>
    </div>
</body>
</html>
