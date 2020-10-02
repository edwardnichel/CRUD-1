<h1>Inserir nova matrícula</h1>

<form method="post" action="processa_insercao_matricula.php"><br>
    <p class="badge badge-secondary">Selecione o aluno:</p>
    <select class="form-control form-control-sm" name="escolha_aluno" id="">

        <option value="">Selecione o aluno</option>
        <?php
        while ($linha = mysqli_fetch_array($consulta_alunos)) {
            echo '<option value="' . $linha['id'] . '">' . $linha['nome'] . '</option>';
        }
        ?>
    </select><br><br>

    <p class="badge badge-secondary">Selecione o aluno:</p>
    <select class="form-control form-control-sm" name="escolha_curso" id="">

        <option value="">Selecione o curso</option>
        <?php
        while ($linha = mysqli_fetch_array($consulta_cursos)) {
            echo '<option value="' . $linha['id_curso'] . '">' . $linha['nome_curso'] . '</option>';
            /* echo '<option value="id_curso">nome_curso</option>'; */
        }

        ?>
    </select>
    <br><br>
    <input class="btn btn-success btn-sm" type="submit" value="Matricular">

</form>