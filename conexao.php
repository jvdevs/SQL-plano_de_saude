<?php
$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "plano_de_saude";

$conexao = new mysqli($host, $usuario, $senha, $banco);

if ($conexao->connect_error) {
    die("Falha na conexão: " . $conexao->connect_error);
}
?>
