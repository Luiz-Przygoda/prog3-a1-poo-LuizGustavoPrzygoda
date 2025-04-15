<?php
session_start();
$email_cookie = $_COOKIE['email'] ?? '';
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Login Interativo</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            height: 100vh;
            background: linear-gradient(120deg, #6a11cb, #2575fc);
            overflow: hidden;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Efeitos decorativos no fundo */
        body::before,
        body::after {
            content: "";
            position: absolute;
            border-radius: 50%;
            opacity: 0.3;
            z-index: 0;
        }

        body::before {
            width: 600px;
            height: 600px;
            background: radial-gradient(circle, #9b59b6, transparent 70%);
            top: -200px;
            left: -200px;
        }

        body::after {
            width: 500px;
            height: 500px;
            background: radial-gradient(circle, #8e44ad, transparent 70%);
            bottom: -150px;
            right: -150px;
        }

        .container {
            position: relative;
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

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 12px 15px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-sizing: border-box;
        }

        .senha-indicador {
            height: 8px;
            width: 100%;
            border-radius: 5px;
            margin-top: 5px;
            transition: background 0.3s ease;
        }

        .fraca {
            background-color: #e74c3c;
        }

        .media {
            background-color: #f39c12;
        }

        .forte {
            background-color: #27ae60;
        }

        .mensagem-senha {
            margin: 5px 0 15px;
            font-size: 14px;
            font-weight: bold;
            color: #555;
        }

        button {
            background-color: #6a11cb;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            margin-top: 10px;
            font-size: 16px;
            transition: background 0.3s ease;
        }

        button:hover {
            background-color: #4e0ca1;
        }

        .footer {
            margin-top: 15px;
            font-size: 12px;
            color: #666;
        }
    </style>

    <script>
        function verificarForcaSenha() {
            const senha = document.getElementById("senha").value;
            const barra = document.getElementById("indicador");
            const mensagem = document.getElementById("mensagemSenha");

            let forca = 0;
            if (senha.length >= 6) forca++;
            if (/[A-Z]/.test(senha)) forca++;
            if (/[0-9]/.test(senha)) forca++;
            if (/[^a-zA-Z0-9]/.test(senha)) forca++;

            barra.className = "senha-indicador";
            mensagem.textContent = "";

            if (senha.length === 0) {
                mensagem.textContent = "";
            } else if (forca <= 1) {
                barra.classList.add("fraca");
                mensagem.textContent = "Senha fraca";
                mensagem.style.color = "#e74c3c";
            } else if (forca === 2 || forca === 3) {
                barra.classList.add("media");
                mensagem.textContent = "Senha média";
                mensagem.style.color = "#f39c12";
            } else {
                barra.classList.add("forte");
                mensagem.textContent = "Senha forte";
                mensagem.style.color = "#27ae60";
            }
        }
    </script>
</head>
<body>
    <div class="container">
        <h1>Seja Bem-vindo!</h1>
        <form method="POST" action="processa.php">
            <input type="text" name="nome" placeholder="Digite seu nome" required>
            <input type="email" name="email" placeholder="Digite seu e-mail" value="<?= htmlspecialchars($email_cookie) ?>" required>
            <input type="password" name="senha" id="senha" placeholder="Digite sua senha" required oninput="verificarForcaSenha()">
            <div id="indicador" class="senha-indicador"></div>
            <p id="mensagemSenha" class="mensagem-senha"></p>
            <button type="submit">Entrar</button>
        </form>
        <div class="footer">Formulário com Sessões e Cookies | PHP</div>
    </div>
</body>
</html>
