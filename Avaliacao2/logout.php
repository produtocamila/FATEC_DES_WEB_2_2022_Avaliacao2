<?php
// Inicializa uma sessão
session_start();
 
// Unset todas as variáveis
$_SESSION = array();
 
// Destruir a sessão.
session_destroy();
 
// Redireciona para página de login
header("location: inicio.php");
exit;
?>