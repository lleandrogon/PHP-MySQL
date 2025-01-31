<h1>Inserir nova matrícula</h1>
<br>

<form method="POST" action="processa_matricula.php">

    <p>Selecione o aluno</p>
    <select name="escolha_aluno" id="">
        <option>Selecione um aluno</option>
        <?php 
            while ($linha = mysqli_fetch_array($consulta_alunos)) {
                echo '<option value="' . $linha['id_aluno'] . '">' . $linha['nome_aluno'] . '</option>';
            }
        ?>
    </select>
    <br>
    <br>

    <select name="escolha_curso" id="">
        <br>
        <br>
        <p>Selecione o curso</p>
        <option>Selecione um curso</option>
        <?php
            while ($linha = mysqli_fetch_array($consulta_cursos)) {
                echo '<option value="' . $linha['id_curso'] . '">' . $linha['nome_curso'] . '</option>';
            } 
        ?>
    </select>
    <br>
    <br>

    <input type="submit" value="Matricular aluno no curso">

</form>