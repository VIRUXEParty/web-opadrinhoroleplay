<?php
include 'serverstatus.php';

use EpEren\Fivem\ServerStatus;

$server = ServerStatus::ServerBased("sv.opadrinhoroleplay.pt","30120");
?>

<!DOCTYPE html>
<html lang="pt-pt" data-theme="dark">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,700;1,300&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="pico.min.css">
	<title>O Padrinho Roleplay - FiveM</title>
</head>

<body>
	<div id="hero">
		<!-- <nav class="container-fluid">
			<img src="img/padrinho.png">
			<ul>
			  <li><a href="#">Link</a></li>
			  <li><a href="#">Link</a></li>
			  <li><a href="#" role="button">Button</a></li>
			</ul>
		  </nav> -->
		<header class="container">
			<img id="logo" src="img/logotext.png">
		</header>
	</div>
	<a style="position: absolute; top: 5px; right: 5px; text-align: center; font-size: small; color: <?= $server->IsOnline() === true ? 'green' : 'red'; ?>;" title="sv.opadrinhoroleplay.pt:30120" href="fivem://sv.opadrinhoroleplay.pt:30120"><?= $server->IsOnline() === true ? 'Servidor Online' : 'Servidor Offline'; ?></a>
	<main class="container">
		<p id="intro">
			Olá! Como já deves ter adivinhado pelo nome, neste servidor poderás jogar <i>Roleplay</i>.<br>
			Se não sabes o que é Roleplay... Basicamente é interpretar uma personagem fictícia, criada por ti, neste caso, num ambiente de jogo. Poderás então aqui criar as tuas personagens e conviver com os restantes jogadores e as suas personagens, dentro do servidor. Ou seja uma segunda vida, mas online.
		</p>
		<div id="guildedInvite">
			<p>Junta-te a nossa comunidade no <em data-tooltip="Uma app tipo Discord, mas bem mais completa e com tudo gratuito!">Guilded</em>!<img id="copyGuildedLink" title="Copiar link do Guilded (Partilha com os teus amigos)" src="img/link.png" onclick="copyUrlToClipboard();"></p>
			<a href="http://chat.opadrinhoroleplay.pt" class="contrast outline" role="button"><img src="img/guilded-logo.png">Entrar no Guilded</a>
		</div>
		<section id="features">
			<div class="grid">
				<article>
					<header>
						<img src="img/think-out-of-the-box.png">
						<h4>Um novo Conceito</h4>
					</header>
					Todos os aspectos do nosso servidores foram pensados e programados completamente do <mark>zero</mark>, oferecendo assim uma experiência fora do normal, comparado com os servidores existentes no <i>FiveM</i>.
				</article>
				<article>
					<header>
						<img src="img/rules.png">
						<h4>Roleplay Sério</h4>
						
					</header>
					Presamos pela <b>máxima</b> qualidade no Roleplay.<br>
					Todas as regras normais de Roleplay devem ser <ins>rigorosamente</ins> cumpridas por todos os jogadores. Temos varios sistemas para verificar que todas as regras são cumpridas, para além da monitorização constante pela nossa equipa.
				</article>
				<article>
					<header>
						<img src="img/united.png">
						<h4>Comunidade Amigável</h4>
					</header>
					Temos tolerãncia zero para qualquer tipo de <del>negatividade</del>!<br>
					Toda a nossa equipa é amigável e não te julga de qualquer forma.<br>
					Estamos todos aqui para passar um bom tempo.<br>
					Qualquer jogador que tenha intenção clara de ser desagradável é removido de forma permanente do nosso servidor.
				</article>
			</div>
			<div class="grid">
				<article>
					<header>
						<img src="img/lightbulb.png">
						<h4>Experiência Intuitiva</h4>
					</header>
					Todo o servidor é criado para que tenhas toda a informação disponível dentro do jogo, de uma forma intuitiva e prática de aceder.<br>
				</article>
				<article>
					<header>
						<img src="img/blogger.png">
						<h4>Equipa Empenhada</h4>
					</header>
					Se mesmo depois de passares o exame de acesso ao servidor, continuares com dúvidas, terás sempre alguém para te ajudar a ter melhor experiência possível. O nosso sistema de tickets permite que os mesmos sejam atendidos por administradores que não se encontrem a jogar.	
				</article>
				<!-- <article></article> -->
			</div>
		</section>
	</main>
	<footer class="container">
		<small><i>O Padrinho Roleplay 2022</i> - Todos os direitos reservados</small><br>
		<small><b>Grupo <a href="http://viruxe.party">VIRUXEParty</a></b></small>
	</footer>
</body>
<script>
	function copyUrlToClipboard()
	{
		navigator.permissions.query({name: "clipboard-write"}).then(result => {
			if (result.state == "granted" || result.state == "prompt") {
				navigator.clipboard.writeText("http://chat.opadrinhoroleplay.pt")

				alert("Link copiado. Partilha com os teus amigos!")
			}
		});
	}
</script>
</html>