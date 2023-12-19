<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
</html>
<?php
    include 'conexao.php';
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

    $resul_empresa = "SELECT * FROM empresa WHERE id = '$id'";
    $resultado_empresa = mysqli_query($connx, $resul_empresa);
    
    $row_cliente = mysqli_fetch_assoc($resultado_empresa);
?>

<body>
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Razão</th>
                <th>CNPJ</th>
                <th>Nome Rua</th>
                <th>Número Rua</th>
                <th>Complemento</th>
                <th>Bairro</th>
                <th>Cidade</th>
                <th>Estado</th>
                <th>CEP</th>
                <th>Telefone</th>
                <th>Email</th>
                <th>Atuação</th>
            </tr>
        </thead>
        <tbody>
        <tr>
            <form action="proc-editar.php" method="post">
               <input type="hidden" name="id" value="<?php echo $row_cliente['id']; ?>">

                <td><input type="text" name="nome" value = "<?php echo $row_cliente['nome']; ?>"></td>
                <td><input type="text" name="razao" value = "<?php echo $row_cliente['razao']; ?>"></td>
                <td><input type="text" name="cnpj" value = "<?php echo $row_cliente['cnpj']; ?>"></td>
                <td><input type="text" name="nome_rua" value = "<?php echo $row_cliente['nome_rua']; ?>"></td>
                <td><input type="number" name="numero_rua" value = "<?php echo $row_cliente['numero_rua']; ?>"></td>
                <td><input type="text" name="complemento" value = "<?php echo $row_cliente['complemento']; ?>"></td>
                <td><input type="text" name="bairro" value = "<?php echo $row_cliente['bairro']; ?>"></td>
                <td><input type="text" name="cidade" value = "<?php echo $row_cliente['cidade']; ?>"></td>
                <td><input type="text" name="estado" value = "<?php echo $row_cliente['estado']; ?>"></td>
                <td><input type="text" name="cep" value = "<?php echo $row_cliente['cep'];?>"></td>
                <td><input type="tel" name="telefone" value = "<?php echo $row_cliente['telefone'];?>"></td>
                <td><input type="email" name="email" value = "<?php echo $row_cliente['email']; ?>"></td>
                <td><input type="text" name="atuacao" value = "<?php echo $row_cliente['atuacao']; ?>"></td>
                <td><input type="submit" value="Salvar"></td>
            </form>
        </tr>
        </table>
</body>