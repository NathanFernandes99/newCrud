<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
</html>

<?php
include 'conexao.php';

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$razao = filter_input(INPUT_POST, 'razao', FILTER_SANITIZE_STRING);
$cnpj = filter_input(INPUT_POST, 'cnpj', FILTER_SANITIZE_NUMBER_INT);
$nome_rua = filter_input(INPUT_POST, 'nome_rua', FILTER_SANITIZE_STRING);
$numero_rua = filter_input(INPUT_POST, 'numero_rua', FILTER_SANITIZE_NUMBER_INT);
$complemento = filter_input(INPUT_POST, 'complemento', FILTER_SANITIZE_STRING);
$bairro = filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_STRING);
$cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
$estado = filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_STRING);
$cep = filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_NUMBER_INT);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_NUMBER_INT);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$atuacao = filter_input(INPUT_POST, 'atuacao', FILTER_SANITIZE_STRING);

$result_empresa = "UPDATE empresa SET nome = '$nome', razao = '$razao',cnpj = '$cnpj', nome_rua = '$nome_rua', numero_rua = '$numero_rua', complemento = '$complemento', bairro = '$bairro', cidade = '$cidade', estado = '$estado', cep = '$cep', telefone = '$telefone', email = '$email', atuacao = '$atuacao' WHERE id=$id ";

$resultado_empresa = mysqli_query($connx, $result_empresa);


header('location:listagem.php');