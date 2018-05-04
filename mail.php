<?php

//Exercício de conectar ao banco de dados
include_once('pages/conexao.php');

$nome = $_POST['nome'];
$email = $_POST['email'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];

$resultado = "INSERT INTO contatos (nome, email, assunto, mensagem)
VALUES('$nome', '$email', '$assunto', '$mensagem')";

$resultado_final = mysqli_query($conexao, $resultado);

// ---EXERCÍCIO DE ENVIAR O E-MAIL---
//(não funciona sem hosperdar na web, mas fiz o código)

$para = "matadoxx1@gmail.com";
$sobre = "Contato WoW History";

$corpo = "<strong> Mensagem de Contato </strong><br><br>";
$corpo .= "<strong> Nome: </strong> $nome";
$corpo .= "<strong> E-mail: </strong> $email";
$corpo .= "<strong> Assunto: </strong> $assunto";
$corpo .= "<strong> Mensagem: </strong> $mensagem";

$header = "De:$email Responder a:$email";
$header .= "Tipo de conteúdo: text/html; charset = utf-8";

@mail($para, $sobre, $corpo, $header);

header("Location:faleconosco.php?mensagem=enviado");

?>
