<?php
session_start();

$data = date('d/m/Y h:m:s');
$user = $_SESSION['nome'];
$usuario = 0;
$autorizacao = 01;
$ip = $_SERVER["REMOTE_ADDR"];



if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true) and (!isset ($_SESSION['nome']) == true))
{
    unset($_SESSION['nome']);
    unset($_SESSION['login']);
    unset($_SESSION['senha']);
    header('location:acesso.php');
    
}
else{
    $nome    = $_SESSION['login']; 
    $usuario = $_SESSION['login'];
    
}
?>