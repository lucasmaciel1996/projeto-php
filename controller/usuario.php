<?php
# VALIDAÇÃO DE ACESSO (LOGIN)

if(isset($_POST['entrar']))
{
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    $select = $con->prepare("SELECT * FROM users WHERE login='$login' and senha='$senha'");
    $select->setFetchMode(PDO::FETCH_ASSOC);
    $select->execute();
    $data=$select->fetch();

    if($data['login']!=$login and $data['senha']!=$senha)
    {
        $erro = "Usuário ou senha inválidos!";
    }
    elseif($data['login']==$login and $data['senha']==$senha)
    {
        $_SESSION['login']=$data['login'];
        $_SESSION['id']=$data['id'];
        header("location:view/home.php?link=1");
    }
}
?>

