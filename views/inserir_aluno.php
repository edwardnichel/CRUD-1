<?php if (!isset($_GET['editar'])) { ?>

    <h1>Inserir novo aluno</h1>

    <form method="post" action="processa_insercao_aluno.php">
        <br>
        <label class="badge badge-secondary">Nome do aluno: </label><br>
        <input class="form-control form-control-sm" type="text" name="nome" placeholder="Insira o nome do aluno"><br><br>
        <label class="badge badge-secondary">Data de nascimento: </label><br>
        <input class="form-control form-control-sm" type="text" name="data_nascimento" placeholder="dd/mm/aaaa"><br><br>
        <input class="btn btn-success btn-sm" type="submit" value="Enviar">
    </form>

<?php } else { ?>
    <?php while ($linha = mysqli_fetch_array($consulta_alunos)) { ?>
        <?php if ($linha['id'] == $_GET['editar']) { ?>

            <h1>Editar aluno</h1>

            <form method="post" action="edita_aluno.php">

                <input type="hidden" name="id" value="<?php echo $linha['id']; ?>">
                <br>
                <label>Nome do aluno: </label><br>
                <input class="form-control form-control-sm" type="text" name="nome" placeholder="Insira o nome do aluno" value="<?php echo $linha['nome']; ?>"><br><br>
                <label>Data de nascimento: </label><br>
                <input class="form-control form-control-sm" type="text" name="data_nascimento" placeholder="Insira a data de nascimento" value="<?php echo $linha['data_nascimento']; ?>"><br><br>
                <input class="btn btn-success" type="submit" value="Enviar">
            </form>

        <?php } ?>

    <?php } ?>

<?php } ?>