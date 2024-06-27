<?php
require_once('../Login/conexao.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primeira Pagina</title>
</head>
<body>
    <h1>Cadastro de usuário</h1>
    <main>

        <form action="recCadastro.php" method="POST">
            <label for="txtNome">Nome: </label>
            <input type="text" name="txtNome" id="txtNome" placeholder="Nome Inteiro" required>
            <br><br>

            <label for="txtEmail">Email: </label>
            <input type="email" name="txtEmail" id="txtEmail" required>
            <br><br>

            <label for="txtSenha">Senha: </label>
            <input type="password" name="txtSenha" id="txtSenha"  required>
            <br><br>

            <label for="dtDate">Data de Nascimento: </label>
            <input type="date" name="dtDate" id="dtDate" required >
            <br><br>

            <label for="numTelefone">Telefone: </label>
            <input type="number" name="numTelefone" id="numTelefone" required placeholder="com DDD">
            <br><br>

            <label for="numCPF">CPF: </label>
            <input type="number" name="numCPF" id="numCPF" required min="11" >
            <br><br>


            <input type="submit" value="cadastrar">
            <a href="../Login/login.php">Voltar</a>
        </form>
    </main>

    <!--<h2>Lista de Usuarios</h2>
        <table border="1">
        
            <tr>
                <td class="titulo" >ID</td>
                <td class="titulo" >NOME</td>
                <td class="titulo" >EMAIL</td>
                <td class="titulo" >SENHA</td>
                <td class="titulo" >NASCIMENTO</td>
                <td class="titulo" >TELEFONE</td>
                <td class="titulo" >CPF</td>
        
            </tr>
            <?php 
            $sql = "SELECT * FROM usuarios";
            $comando = $conexao->prepare($sql);
            $comando-> execute();
            $usuarios = $comando->fetchAll();
            foreach($usuarios as $usuario){ ?>
            <tr>
                <td><?=$usuario["id"]?></td>
                <td><?=$usuario["nome"]?></td>
                <td><?=$usuario["email"]?></td>
                <td><?=$usuario["senha"]?></td>
                <td><?=$usuario["dtNasc"]?></td>
                <td><?=$usuario["telefone"]?></td>
                <td><?=$usuario["cpf"]?></td>
                <?php } ?>
            </tr>
        
        </table>-->
</body>
</html>