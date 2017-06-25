<!DOCTYPE html>
<html>

	<head>
		<title>Tamillys Pantuza</title>
		<meta charset="UTF-8">
		<meta name="description" content="Tamillys Pantuza" />
		<meta name="keywords" content="front-end, design, ilustração, computação gráfica, computação, cientista da computação"/>
		<title> Desenvolvedor Front-end, Ilustrador, Designer, computação Gráfica </title>

		<link rel="stylesheet" media="all" href="css/main.css" />
		<link rel="stylesheet" href="css/portfolio.css" />

		<script src="js/modernizr.custom.37797.js"></script>
		<!-- Grab Google CDN's jQuery. fall back to local if necessary -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
		<script>!window.jQuery && document.write('<script src="/js/jquery-1.6.1.min.js"><\/script>')</script>
		<script src="js/parallax.js"></script>
		<script src="js/portfolio.js"></script>
	</head>

	<body>

		<div id="wrapper">

			<!--<header id="branding">
				<h1>@Tamtuza</h1>
			</header>-->

			<nav id="primary">
				<ul>
					<li>
						<h1>Principal</h1>
						<a class="home" href="#home"><img src="img/Home.png" width="20" height="20"/></a>
					</li>
					<li>
						<h1>Trabalhos</h1>
						<a class="work" href="#work"><img src="img/Portifolium.png" width="20" height="20"/></a>
					</li>
					<li>
						<h1>Interesses</h1>
						<a class="interests" href="#interests"><img src="img/Interests.png" width="20" height="20"/></a>
					</li>
					<li>
						<h1>Sobre mim</h1>
						<a class="about" href="#about"><img src="img/About.png" width="20" height="20"/></a>
					</li>
					<li>
						<h1>Contato</h1>
						<a class="contact" href="#contact"><img src="img/Contact.png" width="20" height="20"/></a>
					</li>
				</ul>
			</nav>

			<div id="content">
				<article id="home">
					<header>
						<h1>Oi, meu nome é <br> Tamillys Pantuza</h1>
					</header>
					<p>
						Sou formanda do curso de Ciência da Computação e adoro mesclar diversão e tecnologia.
						Meu ideal de vida é desenvolver ferramentas que melhorem o dia-a-dia de pessoas como eu e você. <br>
						<br>
						E então, quer conhecer um pouco do meu trabalho?
					</p>
					<nav class="next-prev">
						<a class="next work" href="#work">Next</a>
					</nav>
				</article>

				<article id="work">
					<header>
						<h1>Portfolio</h1>
						** Em construção **
					</header>
					<div id="wrap">
						<div id="spacer"></div>
						<a id="btn-left" class="btn"><i class="fa fa-chevron-left"></i> <img src="img/chevron-left.png"/> </a>
						<div id="slides">
							<div class="slide slide-left"><img src="img/HM.jpg" alt=""/></div>
							<div class="slide slide-center"><img src="img/ClickViagens.jpg" alt=""/></div>
							<div class="slide slide-right"><img src="img/Secomp.jpg" alt=""/></div>
						</div>
						<a id="btn-right" class="btn"> <i class="fa fa-chevron-right"></i> <img src="img/chevron-right.png"/> </a>
					</div>
				</article>

				<article id="interests">
					<header>
						<h1>Interesses e Habilidades</h1>
					</header>
					<br>
					<p id=interests-esq>
						HTML, CSS, C# <br><br>
						<img src="img/5stars.png"/>
						<br> Java, C++, C <br><br>
						<img src="img/4stars.png"/>
						<br> PHP, SQL <br><br>
						<img src="img/3stars.png"/>
						<br> CUDA <br><br>
						<img src="img/2stars.png"/>
						<br> Python <br><br>
						<img src="img/1star.png"/>
					</p>
					<p id=interests-dir>
						Visual Studio, Photoshop <br><br>
						<img src="img/5stars.png"/>
						<br> Git, Sketchbook Pro <br><br>
						<img src="img/4stars.png"/>
						<br> Unity 3D, 3DsMax <br><br>
						<img src="img/3stars.png"/>
						<br> Bootstrap <br><br>
						<img src="img/2stars.png"/>
						<br> Illustrator <br><br>
						<img src="img/1star.png"/>
					</p>
				</article>
				<article id="about">
					<header>
						<h1>Um pouco mais sobre mim</h1>
					</header>
					<p align="justify">
						Mineira natural de João Monlevade, tenho 25 anos, sou programadora e aspirante a ilustradora e modeladora/escultora. Atualmente trabalho como desenvolvedora Front-end na StudioApp em Juiz de Fora - MG.
						Tenho grande interesse em tecnologia, empreendedorismo e design, e gosto de trabalhar com jogos e demais conteúdos multimídia.
						Adoro arte, literatura e cinema, e procuro sempre mesclar conteúdos de diferentes áreas em tudo o que faço.
						Estou sempre buscando aprender coisas novas, mesmo que elas não tenham nada a ver com minha escolha acadêmica/profissional.
						Dou aulas de C# no Projeto Tutoras, pratico Jiu-Jitsu, ando <strike>caindo bastante</strike> de longboard, arranho umas músicas no violão e estou me aventurando
						na criação de tiras para uma página que em breve vai estar bombando 'nas internets'. #oremos
						<br><br>
						Meu passatempo? <br>
						Alongar os braços. Um dia ainda vou ser capaz de abraçar o mundo!
					</p>
				</article>

				<article id="contact">
					<?php
						$destino = 'tamillyspantuza@gmail.com';
						$nome = $_POST["nome"];
						$email = $_POST["email"];
						$mensagem= $_POST["styled-textarea"];

						$assunto = "Contato do seu site pessoal";
						$headers .= "From: $email\r\n";

						if ($_POST['enviar']){
							$resposta = mail("$destino", "$assunto",
							"Nome: $nome
							Email: $email

							Mensagem: $mensagem", $headers);
							if ($resposta == 1){
								echo '<script type="text/javascript">
									alert("E-mail enviado com sucesso!");
								      </script>';
							}else{
								echo '<meta http-equiv="refresh" content="0; URL=index.php" />';
							}
						} echo "
							<header align='center'>
								<h1>Vamos conversar!</h1>
							</header>
							<p align='center'>Me siga nas redes sociais, mande um e-mail para tamillyspantuza@gmail.com ou deixe uma mensagem aqui:</p>
							<br><br>
							<!-- Formulário com text!-->

							<form method='post' action=''>
								<div class='row'>
									<input id='nome' name='nome' type='text' class='large' placeholder='NOME'/>
								</div>
								<div class='row'>
									<input id='email' name='email' type='text' class='large' placeholder='EMAIL'/>
								</div>
								<br>
								<!-- Caixa de Mensagem (textarea)!-->
								<div class = 'row'>
									<textarea name='styled-textarea' id='mensagem' placeholder='MENSAGEM'></textarea>
								</div>
								<br>
								<!-- Button Enviar e Limpar !-->
								<div>
									<input class='but' type='submit' value='Enviar'><input type='hidden' name='enviar' value='tamillyspantuza@gmail.com'>
									<input class ='but' type='reset' value='Limpar'>
								</div>
							</form>
							<br><br><br>";
					?>
					<div id="socialmedia" align="center">
						<a href="https://br.linkedin.com/in/tamillys" target="_blank"><img src="img/linkedin.png" width="20" height="20" alt="LinkedIn"/></a>
						<a href="http://www.github.com/tamtuza" target="_blank"><img src="img/github.png" width="20" height="20" alt="Github"/></a>
						<a href="http://www.facebook.com/tamillys" target="_blank"><img src="img/facebook.png" width="10" height="20" alt="Facebook"/></a>
						<a href="http://www.twitter.com/tamtuza" target="_blank"><img src="img/twitter.png" width="20" height="20" alt="Twitter"/></a>
						<a href="http://www.youtube.com/tamillyspantuza" target="_blank"><img src="img/youtube.png" width="20" height="16" alt="Youtube"/></a>
						<a href="http://plus.google.com/+TamillysPantuza" target="_blank"><img src="img/googleplus.png" width="20" height="16" alt="Google +"/></a>
						<a href="http://www.instagram.com/tamtuza" target="_blank"><img src="img/instagram.png" width=20" height="20" alt="Instagram"/></a>
						<a href="http://www.tamillys.tumblr.com" target="_blank"><img src="img/tumblr.png" width="14" height="20" alt="Tumblr"/></a>
						<a href="http://www.last.fm/pt/user/Tamillys" target="_blank"><img src="img/lastfm.png" width="20" height="20" alt="LastFM"/></a>
					</div><br><br><br>
				</article>

				<article id="footer">
						&copy Copyright 2016 - Tamtuza
				</article>
			</div>

			<!-- Parallax foreground -->
			<div id="parallax-bg3">
				<img id="bg3-1" src="img/perfil.png"/>
				<img id="bg3-4" src="img/frente.png" />
			</div>
		</div>
	</body>
</html>
