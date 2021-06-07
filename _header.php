<!--Aqui começa o cabeçalho do site, essa parte é igual em todas as páginas-->
<header>
	<nav id="menu">
			<ul>
			<b>
			
	<?php
				if(!isset($_SESSION['cpf'])){ ?>
	<?php			
				}else{ ?>
				<li><a id="mensagem">Bem-vindo <?php echo $_SESSION['cpf']; ?>!</a></li>		
	<?php } ?>
				<li><a href="index.php">Início</a></li>
				<li><a href="participantes.php">Cadastro</a></li>
				<li><a href="saibamais.php">Saiba mais</a></li>
				<li><a href="projetos.php">Projetos</a></li>
				<li><a href="comoajudar.php">Como Ajudar</a></li>
				<li><a href="contato.php">Contato</a></li>
	<?php
				if(!isset($_SESSION['cpf'])){ ?>
				<li><a href="pag_login.php"><i class="fa fa-lock"></i>Login</a></li>
				
				
				
	<?php
				}else{ ?>
				<li><a href="logout.php"><i class="fa fa-unlock"></i>Sair</a></li>
				
	<?php } ?>
				<!--condição if para verificar se está logado para aparecer botão de login ou de sair-->
			</b>
			</ul>
	</nav>
	<h1>CECOI Vó Maria Félix</h1>
	<br>
</header>
