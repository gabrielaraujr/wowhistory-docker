<?php

$host = "db";
$usuario = "root";
$senha = "root";
$db = "contatos_db";

// Criar conexão
$conexao = new mysqli($host, $usuario, $senha, $db);

if($conexao->connect_error){
  echo 'Falha na conexão!' . $conexao->connect_error;
}else {
  echo '<br> Sucesso na conexão com o MYSQL!';
}

?>