<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $dbname = "funildevendas";

    //Cria a conexão
    $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

    $pesquisar = $_POST['pesquisar'];
    $result_cursos = "SELECT * FROM cursos WHERE nome LIKE '%$pesquisar%' LIMIT 5";
    $resultado_cursos = mysqli_query($conn, $result_cursos);

    while($rows_cursos = mysqli_fetch_array($resultado_cursos)) {
        echo "Nome do produto: " .$rows_cursos ['nome']."<br>";
    }
?>