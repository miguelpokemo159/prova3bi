<?php

include_once("conecta.php");


$nome = $_POST['nome'];
$email = $_POST["email"];

$result_usuario = "INSERT INTO usuario (nome, email) VALUES ('$nome' , '$email')";
$resultos_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_insert_id($conn)){
    
    header("Location: mensagem.html");
}




?>