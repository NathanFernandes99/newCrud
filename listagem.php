<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
</html>

<?php 

    include 'conexao.php';

    $buscar_cadastro = "SELECT * FROM empresa";

    $query_cadastro = mysqli_query($connx, $buscar_cadastro);

?>

<body>
    <table>
        <thead>
            <tr>
                <th>id</th>
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
                <form action="cadastro.php" method="post">
                    <td></td>
                    <td><input type="text" name="nome" placeholder="Digite aqui" required></td>
                    <td><input type="text" name="razao" placeholder="Digite aqui" required></td>
                    <td><input type="text" name="cnpj" placeholder="Digite aqui" required></td>
                    <td><input type="text" name="nome_rua" placeholder="Digite aqui"></td>
                    <td><input type="text" name="numero_rua" placeholder="Digite aqui"></td>
                    <td><input type="text" name="complemento" placeholder="Digite aqui"></td>
                    <td><input type="text" name="bairro" placeholder="Digite aqui"></td>
                    <td><input type="text" name="cidade" placeholder="Digite aqui"></td>
                    <td><input type="text" name="estado" placeholder="Digite aqui"></td>
                    <td><input type="text" name="cep" placeholder="Digite aqui"></td>
                    <td><input type="text" name="telefone" placeholder="Digite aqui" maxlength="11" minlength="10" required></td>
                    <td><input type="text" name="email" placeholder="Digite aqui"></td>
                    <td><input type="text" name="atuacao" placeholder="Digite aqui"></td>
                    <td><input type="submit" value="Cadastrar"></td>
                </form>
            </tr>
                <?php 
                    while ($receber_cadastro = mysqli_fetch_array($query_cadastro)){
                        $id = $receber_cadastro ['id'];
                        $nome = $receber_cadastro ['nome'];
                        $razao = $receber_cadastro['razao'];
                        $cnpj = $receber_cadastro['cnpj'];
                        $nome_rua = $receber_cadastro['nome_rua'];
                        $numero_rua = $receber_cadastro['numero_rua'];
                        $complemento = $receber_cadastro['complemento'];
                        $bairro = $receber_cadastro['bairro'];
                        $cidade = $receber_cadastro['cidade'];
                        $estado = $receber_cadastro['estado'];
                        $cep = $receber_cadastro['cep'];
                        $telefone = $receber_cadastro['telefone'];
                        $email = $receber_cadastro['email'];
                        $atuacao = $receber_cadastro['atuacao'];  
                ?>
                <tr>
                    <td><?php echo $id;?></td>
                    <td><?php echo $nome;?></td>
                    <td><?php echo $razao;?></td>
                    <td><?php echo $cnpj;?></td>
                    <td><?php echo $nome_rua;?></td>
                    <td><?php echo $numero_rua;?></td>
                    <td><?php echo $complemento;?></td>
                    <td><?php echo $bairro;?></td>
                    <td><?php echo $cidade;?></td>
                    <td><?php echo $estado;?></td>
                    <td><?php echo $cep;?></td>
                    <td><?php echo $telefone;?></td>
                    <td><?php echo $email;?></td>
                    <td><?php echo $atuacao;?></td>

                    <td><form action="excluir.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $id;?>">
                    <input type="submit" value="Excluir">
                    </form>
                    
                    <?php echo "<a href='editar.php?id=". $receber_cadastro['id'] . "'> Editar </a>";
                    ?>
                    </td>
                </tr>

                <?php }?>
        </tbody>
    </table>
</body>