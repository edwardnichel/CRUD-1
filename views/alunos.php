<a class="btn btn-outline-secondary btn-sm btn-block" href="?pagina=inserir_aluno">Inserir novo aluno</a><br>

<table class="table table-hover table-striped" id="alunos">
    <thead>
        <tr class="conteudo-tabela">
            <th>Aluno</th>
            <th>Data nascimento</th>
            <th>Editar</th>
            <th>Deletar</th>
        </tr>
    </thead>

    <tbody>
        <?php
        while ($linha = mysqli_fetch_array($consulta_alunos)) {
            echo '<tr class="conteudo-tabela"><td>' . $linha['nome'] . '</td>';
            echo '<td>' . $linha['data_nascimento'] . '</td>';

            /* usei o strtotime no código, pois originalmente meu banco de dados recebia a data de nascimento como DATE;
        acabei mudando para var char após ver que no curso o professor fez assim.
        ARRUMAR NO FUTURO: usar DATE no bd e tratar com o php a entrada e saída de dados com padrão DD/MM/AAAA
    */

        ?>

            <td class="conteudo-tabela">
                <a href="?pagina=inserir_aluno&editar=<?php echo $linha['id']; ?>">
                    <span style="color: black;">
                        <i class="fas fa-user-edit"></i>
                    </span>
                </a>
            </td>

            <td class="conteudo-tabela">
                <a href="deleta_aluno.php?id=<?php echo $linha['id']; ?>">
                    <span style="color: black;">
                        <i class="fas fa-user-times"></i>
                    </span>
                </a>
            </td>
            </tr>

        <?php
        }
        ?>
    </tbody>
</table>