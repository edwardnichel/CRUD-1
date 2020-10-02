<?php

include 'db.php';

$id = $_POST['id'];
$nome = $_POST['nome'];
$data_nascimento = $_POST['data_nascimento'];

$query = "UPDATE alunos SET nome='$nome', data_nascimento='$data_nascimento' WHERE id = $id";

mysqli_query($conexao, $query);

header('location:index.php?pagina=alunos');