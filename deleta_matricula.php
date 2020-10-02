<?php

include 'db.php';

$id = $_GET['id'];

$query = "DELETE FROM alunos_cursos WHERE id = $id";

mysqli_query($conexao, $query);

header('location:index.php?pagina=matriculas');