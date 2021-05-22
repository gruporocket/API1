<?php
session_start();
//Página de formulários para cadastro (primeira vez) e login (usuários já cadastrados)
?>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
    content="width=device-width, inicial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style3.css">
	<style type="text/css"> 
    a:link 
    { 
     text-decoration:none; 
    } 
    </style>
</head>
<body>

<?php
	include("_header.php");
?>

    <hr>
    <div id="wrapper">
    <section id="formlogin">
<!--Primeiro formulário de login, para quem já fez o cadastro.. 
se o usuario ou senha estiver errado ou não foi cadastrado vai aparecer msg de erro-->
    <br>
    <h3>Já tenho cadastro:</h3>
    <?php
    if(isset($_SESSION['nao_autenticado'])):
    ?>
    <div class="notification is-danger">
        <p>ERRO: Usuário ou senha inválidos.</p>
    </div>
    <?php
    endif;
    unset($_SESSION['nao_autenticado']);
    ?>
    <form method="POST" action="processa_login.php">
        <label>CPF:</label><input type="text" name="cpf" id="cpf" placeholder="Insira o CPF (apenas números)"><br>
        <label>Senha:</label><input type="password" name="senha" id="senha" placeholder="Insira sua senha"><br>
        <input type="submit" value="Entrar" id="cadastrar" name="cadastrar">
    </form>
    </section>
    <section id="formcad">
    <!--Segundo formulário (mostrar na mesma página mesmo) de cadastro,
    pra quem está entrando pela primeira vez... o usuario e senha que colocar aqui vai pro banco de dados-->
    <br>
    <h3>Criar novo cadastro e senha:</h3>
    <form method="POST" action="cadastro_login.php">
        <label>CPF:</label><input type="text" name="cpf" id="cpf" placeholder="Insira o CPF (apenas números)"><br>
        <label>Senha:</label><input type="password" name="senha" id="senha" placeholder="Crie uma senha"><br>
        <input type="submit" value="Cadastrar" id="cadastrar" name="cadastrar">
    </form>
    </section>
    </div>

<hr width="100%">
    <section id="contato">
        <figure class="redes"><img src="imagens/redes.png" width="600px"> </figure>
        <p>CECOI Vó Maria Félix<br>Rua Carlos Nunes de Paula, 1172<br>            
            Jardim Imperial - São José dos Campos<br>(12) 3966 2823</p>
    </section>
<hr width="100%">
    <footer>Desenvolvido por Grupo Rocket 2021</footer>
</body>
</html>