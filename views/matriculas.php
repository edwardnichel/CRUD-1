<a class="btn btn-outline-dark btn-sm btn-block" href="?pagina=inserir_matricula">Inserir nova matrícula</a><br>

<table class="table table-hover table-striped" id="matriculas">
    <thead>
        <tr class="conteudo-tabela">
            <th>Aluno</th>
            <th>Curso</th>
            <th>Deletar</th>
        </tr>
    </thead>

    <tbody>
        <?php
        while ($linha = mysqli_fetch_array($consulta_matriculas)) {
            echo '<tr class="conteudo-tabela"><td>' . $linha['nome'] . '</td>';
            echo '<td>' . $linha['nome_curso'] . '</td>';
        ?>

            <td class="conteudo-tabela">
                <a href="deleta_matricula.php?id=<?php echo $linha['id']; ?>">
                    <span style="color: black;">
                        <i class="fas fa-trash-alt"></i>
                    </span>
                </a>
            </td>
            </tr>

        <?php
        }
        ?>
    </tbody>
</table>