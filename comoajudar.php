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
    <title>Como Ajudar</title>
    <link rel="stylesheet" type="text/css" href="style3.php">
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
    <!--Fim do cabeçalho-->
    <hr>
    <h2>Como Ajudar</h2>
    <div class="wrapper">
    <section id="voluntarios">
            <figure class="iconevolunt">
                <img src="imagens/help.png" alt="voluntários" width="200px">
            </figure>
            <p>Estou disponível para ser voluntário em qualquer função</p>
            <a class="botao" href="voluntario_apoio.php">Cadastro de Voluntários de Apoio</a>
            <br><br>
            <p>Atuo em uma  função específica e gostaria de disponibilizar meu trabalho e/ou sugerir um projeto</p>
            <a class="botao" href="voluntario_especifico.php">Voluntário Específico / Projetos</a>
            <br><br>
    </section>

    <section id="doacaoecontato">
            <figure class="iconedoacao">
                <img src="imagens/donation.png" alt="doação" width="200px">
            </figure>
            <p>Quero fazer uma doação</p>
            <br>
            <a class="botao" href="doacao.php">Dados para Doações</a>
            <!--página de doacoes ainda não criada-->
            <br><br>
            <p>Tem alguma outra ideia de como ser nosso parceiro? Entre em contato e envie sua sugestão</p>
            <a class="botao" href="#">Contato</a>
            <br><br>
            <!--página de contato ainda não criada-->
    </section>
    </div>

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