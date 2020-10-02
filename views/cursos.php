<a class="btn btn-outline-secondary btn-sm btn-block" href="?pagina=inserir_curso">Inserir novo curso</a><br>

<table class="table table-hover table-striped" id="cursos">
    <thead>
        <tr class="conteudo-tabela">
            <th>Curso</th>
            <th>Carga horária</th>
            <th>Editar</th>
            <th>Deletar</th>
        </tr>
    </thead>

    <tbody>
        <?php
        while ($linha = mysqli_fetch_array($consulta_cursos)) {
            echo '<tr class="conteudo-tabela"><td>' . $linha['nome_curso'] . '</td>';
            echo '<td>' . $linha['carga_horaria'] . '</td>';
        ?>

            <td class="conteudo-tabela">
                <a href="?pagina=inserir_curso&editar=<?php echo $linha['id_curso']; ?>">
                    <span style="color: black;">
                        <i class="fas fa-edit"></i>
                    </span>
                </a>
            </td>

            <td class="conteudo-tabela">
                <a href="deleta_curso.php?id_curso=<?php echo $linha['id_curso']; ?>">
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