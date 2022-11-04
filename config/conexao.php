<?php
$porta="localhost:3307";
$nomeDoBANCO="conexao";
$usuario="root";
$senha="";

$conexao=new PDO("mysql:host=$porta;dbname=$nomeDoBANCO", "$usuario","$senha");
?>