<?php

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$Celular = $_POST['Celular'];
$CPF = $_POST['CPF'];

file_put_contents("dados.csv", "$nome", "$sobrenome", "$email", "$Celular\n" FILE_APPEND);

echo "Olá $nome, suas receitas veg te esperam!" <br>;

?>