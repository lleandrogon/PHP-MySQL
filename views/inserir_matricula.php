<h1>Inserir nova matrícula</h1>
<br>

<form method="POST" action="processa_matricula.php">

    <p class="badge text-bg-secondary">Selecione o aluno</p>
    <select class="form-control" name="escolha_aluno" id="">
        <option>Selecione um aluno</option>
        <?php 
            while ($linha = mysqli_fetch_array($consulta_alunos)) {
                echo '<option value="' . $linha['id_aluno'] . '">' . $linha['nome_aluno'] . '</option>';
            }
        ?>
    </select>
    <br>
    <br>

    <p class="badge text-bg-secondary">Selecione o curso</p>
    <select class="form-control" name="escolha_curso" id="">
        <br>
        <br>
        <option>Selecione um curso</option>
        <?php
            while ($linha = mysqli_fetch_array($consulta_cursos)) {
                echo '<option value="' . $linha['id_curso'] . '">' . $linha['nome_curso'] . '</option>';
            } 
        ?>
    </select>
    <br>
    <br>

    <input class="btn btn-success" type="submit" value="Matricular aluno no curso">

</form>