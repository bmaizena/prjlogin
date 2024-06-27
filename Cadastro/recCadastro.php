<?php



if (isset($_POST['txtEmail']) && isset($_POST['txtSenha']) && isset($_POST['txtNome']) && isset($_POST['dtDate']) && isset($_POST['numTelefone']) && isset($_POST['numCPF'])){

    $email =$_POST['txtEmail'];
    $senha = password_hash ($_POST['txtSenha'], PASSWORD_DEFAULT);
    $nome = $_POST['txtNome'];
    $dtNasc = $_POST['dtDate'];
    $telefone = $_POST['numTelefone'];
    $cpf = $_POST['numCPF'];

    require_once('../Login/conexao.php');
    $sql = "INSERT INTO usuarios (email, senha, nome, dtNasc, telefone, cpf) VALUES (:email, :senha, :nome, :dtNasc, :telefone, :cpf)";

    $comando = $conexao->prepare($sql);
    $comando->bindValue(":email", $email);
    $comando->bindValue(":senha", $senha);
    $comando->bindValue(":nome", $nome);
    $comando->bindValue(":dtNasc", $dtNasc);
    $comando->bindValue(":telefone", $telefone);
    $comando->bindValue(":cpf", $cpf);

    if($comando->execute()){
        header('location: ./pagCadastro.php');
        
    }
}
else{
    header('location: ../Login/login.php');
}