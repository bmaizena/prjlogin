<?php

if (isset($_POST['txtEmail']) && isset($_POST['txtSenha'])){
    require_once('./conexao.php');

    $email = $_POST['txtEmail'];
    $senha = $_POST['txtSenha'];

    $sql = "SELECT * FROM usuarios WHERE email = :email";
    $comando = $conexao->prepare($sql);
    $comando->bindValue(":email", $email, PDO::PARAM_STR);

    if ($comando->execute()){
        $usuario = $comando->fetch();
        if(isset($usuario['email'])){
            if(password_verify($senha, $usuario['senha'])){
                session_start();
                $_SESSION['email'] = $usuario['email'];

                header('location: ../pagina.php');

            }else{
                echo "usuario e senha incorretoss";
            }
    
        }else{
            header('location: ./login.php');
        }
    }
    
}else{
    header('location: ./login.php');
}