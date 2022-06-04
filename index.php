<?php
// include_once('twitter-feed.php');
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
	<div class="hero">
		<!-- <nav class="container-fluid">
			<ul>
				<li>
					<details role="list" dir="rtl">
						<summary aria-haspopup="listbox" role="link" class="contrast">Theme</summary>
						<ul role="listbox">
							<li><a href="#" data-theme-switcher="auto">Auto</a></li>
							<li><a href="#" data-theme-switcher="light">Light</a></li>
							<li><a href="#" data-theme-switcher="dark">Dark</a></li>
						</ul>
					</details>
				</li>
				<li>
					<details role="list" dir="rtl">
						<summary aria-haspopup="listbox" role="link" class="contrast">Examples</summary>
						<ul role="listbox">
							<li><a href="../preview/">Preview</a></li>
							<li><a href="../preview-rtl/">Right-to-left</a></li>
							<li><a href="../classless/">Class-less</a></li>
							<li><a href="../basic-template/">Basic template</a></li>
							<li><a href="../company/">Company</a></li>
							<li><a href="../google-amp/">Google Amp</a></li>
							<li><a href="../sign-in/">Sign in</a></li>
							<li><a href="../bootstrap-grid/">Bootstrap grid</a></li>
						</ul>
					</details>
				</li>
			</ul>
		</nav> -->
		<header class="container">
			<img id="logo" src="img/logotext.png" alt="">

		</header>
	</div>
	<main class="container">
		<section>
			Olá! Como já deves ter adivinhado pelo nome, neste servidor poderás jogar um modo de <i>Roleplay</i>.<br>
			Se não sabes o que é Roleplay, basicamente é interpretar uma personagem fictícia criada por ti, num ambiente de jogo. Poderás então aqui criar as tuas personagens e conviver com os restantes jogadores e as suas personagens, dentro do servidor. Ou seja uma segunda vida, mas online.</p>
		</section>
		<section>
			<div class="grid">
				<div>
					<h4>Um novo Conceito</h4>
					<p></p>
				</div>
				<div>
					<h4>Roleplay Sério</h4>
					<p></p>
				</div>
				<div>
					<h4>Comunidade Amigável</h4>
					<p></p>
				</div>
			</div>
		</section>
		<span>Progresso Geral do Servidor:</span><progress value="15" max="100"></progress>
		<div id="feeds" class="grid">
			<article>
				<header><img src="img/twitter.png" class="logo">Twitter</header>
				<?php ?>
			</article>
			<article>
				<header><img src="img/github.png" class="logo">GitHub</header>
			</article>
			<article>
				<header><img src="img/clickup.png" class="logo">Clickup</header>
			</article>
		</div>
	</main>
	<footer class="container">
		<p><small><i>O Padrinho Roleplay 2022</i> - Todos os direitos reservados</small></p>
		<p><small><b>Grupo <a href="http://viruxe.party">VIRUXEParty</a></b></small></p>
	</footer>
</body>
</html>