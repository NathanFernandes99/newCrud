<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
</html>
<?php 
    include 'conexao.php';

    $nome = $_POST['nome'];
    $razao = $_POST['razao'];
    $cnpj = $_POST['cnpj'];
        if (!preg_match("^/[0-9]{2}.[0-9]{3}.[0-9]{3}/[0-9]{4}-[0-9]{2}$", $cnpj))
    $nome_rua = $_POST['nome_rua'];
    $numero_rua = $_POST['numero_rua'];
    $complemento = $_POST['complemento'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $cep = $_POST['cep'];
    $telefone = $_POST['telefone'];
        if (!preg_match("^/([0-9] {2}/)[0-9]{4,5} - [0-9]{4}$^", $telefone))
    $email = $_POST['email'];
    $atuacao = $_POST['atuacao'];

    $recebendo_cadastros = "INSERT INTO empresa VALUES ('','$nome','$razao','$cnpj','$nome_rua','$numero_rua','$complemento','$bairro','$cidade','$estado','$cep','$telefone','$email','$atuacao')";

    $query_cadastro = mysqli_query($connx,$recebendo_cadastros);

    header('location:listagem.php');