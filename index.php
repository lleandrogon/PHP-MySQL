<?php

# Base de dados
include "db.php";

# Cabeçalho
include "header.php";

# Conteúdo da página
if (isset($_GET["pagina"])) {
    $pagina = $_GET["pagina"];
} else {
    $pagina = "home";
}

if ($pagina == "cursos") {
    include "views/cursos.php";
} else if ($pagina == "alunos") {
    include "views/alunos.php";
} else if ($pagina = "inserir_aluno") {
    include "views/inserir_aluno.php";
} else if ($pagina == "inserir_curso") {
    include "views/inserir_curso.php";
} else if ($pagina == "matriculas") {
    include "views/matriculas.php";
} else {
    include "views/home.php";
}

# Rodapé
include "footer.php";