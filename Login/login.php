<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primeira Pagina</title>
</head>

<body>

    <main>
        <h1>Login</h1>
        <form action="./reclogin.php" method="POST">
            <input type="email" name="txtEmail" id="txtEmail" placeholder="Email" required>
            <br><br>
            <input type="password" name="txtSenha" id="txtSenha" placeholder="Senha" required>
            <br><br>
            <input type="submit" value="Entrar">
            <br>
            <a href="../Cadastro/pagCadastro.php">Crie uma conta</a>
        </form>
    </main>
</body>

</html>