<?php
session_start();
//include('verifica_login.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
    content="width=device-width, inicial-scale=1.0">
    <title>CECOI Vó Maria Félix</title>
    <link rel="stylesheet" href="style5.php">
	<style type="text/css"> 
    a:link 
    { 
     text-decoration:none; 
    } 
    </style>
</head>
<body>
    <!--Aqui começa o cabeçalho do site, essa parte é igual em todas as páginas-->
    <?php
	include("_header.php");
    ?>

    <hr width="100%">

    <section id="projeto1">
        <div>
            <figure class="projeto1">
                <img src="ab.png" alt="criança" width="320px">
            </figure>
            <h2>Projeto 1</h2>
            <p>Descrição do projeto, nome e especialização do voluntário que o implementou, época em que foi <br>
             realizado, crianças beneficiadas, comentários de envolvidos, etc.</p>
          </div>
    </section>
    <hr width="100%">
    <section id="projeto2">
        <div>
            <figure class="Projeto2">
                <img src="cd.png" alt="projeto2" width="320px">
            </figure>
            <h2>Projeto 2</h2>
            <p>Descrição do projeto, nome e especialização do voluntário que o implementou, época em que foi <br>
             realizado, crianças beneficiadas, comentários de envolvidos, etc.</p>
        </div>
    <hr width="100%"> <br>
        <a class="btn" href="voluntario_especifico.php">Quero inscrever um projeto!</a> <br><br>
    <hr width="100%">
    <section id="contato">
        <p><strong>CECOI Vó Maria Félix</strong><br>
        Rua Carlos Nunes de Paula, 1172 - Jardim Imperial - São José dos Campos <br>
        Tel: (12) 3966 2823 <br>
        <br>
        <a class="face" href="https://www.facebook.com/cecoivomariafelix" target="_blank"><img src="imagens\facebook.png" width="50px"></a>
        <a class="youtube" href="https://www.youtube.com/channel/UCB-99VOkEEM07VF4VVsP7_g" target="_blank"><img src="imagens\youtube.png" width="50px"></a>
    </section>
    <hr width="100%">
    <footer>Desenvolvido por Grupo Rocket 2021</footer>
</body>
</html>