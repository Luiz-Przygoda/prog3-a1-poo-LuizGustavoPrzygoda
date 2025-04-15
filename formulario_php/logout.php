<?php
session_start();

// Destruir todos os dados da sessão
$_SESSION = array();

// Se desejar destruir o cookie de sessão também
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(
        session_name(), 
        '', 
        time() - 42000,
        $params["path"], 
        $params["domain"],
        $params["secure"], 
        $params["httponly"]
    );
}

// Destruir a sessão
session_destroy();

// Remover o cookie de email com os mesmos parâmetros usados ao criá-lo
setcookie('email', '', [
    'expires' => time() - 3600,
    'path' => '/',
    'secure' => isset($_SERVER['HTTPS']),
    'httponly' => true,
    'samesite' => 'Lax'
]);

// Redirecionar
header("Location: index.php");
exit;
?>