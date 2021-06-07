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
    <link rel="stylesheet" type="text/css" href="style.php">
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

<!--Cabeçalho feito na página header.php e incluso nas demais página para simplificar o código-->
<h3>Doações</h3>
    <section id="corpodoacao">
    <p><b>Ajude-nos a manter nosso trabalho! Aceitamos doações de qualquer valor, os dados para transferência são:</b><br><br>
    BANCO XXXXXX <br>
    AGENCIA XXXX-X <br>
    CONTA CORRENTE XXXXX-X <br>
    CNPJ XX XXX XXX / XXXX-XX <br>
    FAVORECIDO: CECOI VÓ MARIA FELIX <br><br>
    CHAVE PIX: XXXXXXXXXXXXX </p>
    </section>
    <br>
    <br>

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