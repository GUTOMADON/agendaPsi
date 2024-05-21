<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$bancoDeDados = "test";

$banco = new mysqli($servidor, $usuario, $senha, $bancoDeDados);

if ($banco->connect_error) {
    die("Conexão falhou: " . $banco->connect_error);
}
?>
