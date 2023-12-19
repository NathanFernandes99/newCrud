<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
</html>

<?php 
    include 'conexao.php';

    $id = $_POST['id'];

    $recebendo_cadastros = "DELETE FROM empresa WHERE id = '$id'";

    $query_cadastro = mysqli_query($connx,$recebendo_cadastros);

    header('location:listagem.php');