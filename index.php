<!DOCTYPE html>
<html>
<head>
	<title>Symposium</title>
	<link rel="stylesheet" type="text/css" href="symposium.css">
	<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
	<link rel="icon" href="img/rsz_boutique_icon.bmp" type="image/x-icon"/>
</head>
<body>
	<div id="load_screen">
		<!--<h1 id="loadingText">CARICAMENTO</h1>
		<div class="spinner spinner-4"></div>-->
		<div class="pace"></div>
	</div>
	<h1 id="logo">Symposium</h1>
	<div id="landingText"><h1 id="welcome">Benvenuti<br>nel Symposium Project!</h1><br><h2>Siamo un gruppo di ragazzi con la passione per la cinematografia, la fotografia, il teatro, la scrittura, il disegno, la musica, l'arte in tutte le sue forme.<br>Qui troverete nostri lavori, basi musicali, programmi radio, sceneggiature, servizi di editing, grafiche, scrittura e riprese.<br>Buona permanenza!</h2></div>
	<nav id="desktopNav">
		<ul>
			<li><a href="#landing">HOME</a></li>
			<li><a href="#lavori">LAVORI</a>
				<ul class="drop-menu" id="dropdown-menu-1">
					<li> <a class="interMenuLink" href="https://www.youtube.com/channel/UCuEDlaY-RUA9OpfLH--nf-A" target="blank">Canale YT</a></li>
					<li>Musiche</li>
					<li>Teatro</li>
					<li><a class="interMenuLink" href="http://www.lulu.com/spotlight/gabrielesoatto" target="blank">Libri</a></li>
					<li>Radio</li>
				</ul>
			</li>
			<li><a href="#servizi">SERVIZI</a>
				<ul class="drop-menu" id="dropdown-menu-2">
					<li><a class="interMenuLink" href="#servizi">Fotografia</a></li>
					<li><a class="interMenuLink" href="#servizi">Editing</a></li>
					<li><a class="interMenuLink" href="#servizi">Basi Musicali</a></li>
					<li><a class="interMenuLink" href="#servizi">Scritti</a></li>
					<li><a class="interMenuLink" href="#servizi">Gadget</a></li>
				</ul>
			</li>
			<li><a href="#contatti">CONTATTI</a></li>
		</ul>
	</nav>
	<nav id="mobileNav">
		<ul>
			<li>
				<ul class="sidedrop-menu" id="sidedop1">
					<li><a href="#landing">HOME</a></li>
					<li><a href="#lavori">LAVORI</a></li>
					<li><a href="#servizi">SERVIZI</a></li>
					<li><a href="#contatti">CONTATTI</a></li>
				</ul>
			</li>
		</ul>
	</nav>
	<div id="side-menu-button">
		<div id="burger-one"></div>
		<div id="burger-two"></div>
		<div id="burger-three"></div>
	</div>
	<div id="socialDesktopLinks">
		<a href="https://www.facebook.com/boutiquedelmistero/" target="blank"><img src="img/Facebook-square.png"></a>
		<a href="https://www.instagram.com/boutiquedelmistero_yt/" target="blank"><img src="img/instagram-new.png"></a>
		<a href="https://www.youtube.com/channel/UCuEDlaY-RUA9OpfLH--nf-A" target="blank"><img src="img/youtube-new.png"></a>
		<a href="https://twitter.com/symposium_arts" target="blank"><img src="img/twitter-new.png"></a>
	</div>
	<div id="mobileFooter">
		<div id="mobileIconsContainer">
			<a href="https://www.facebook.com/boutiquedelmistero/" target="blank"><img src="img/Facebook-square.png"></a>
			<a href="https://www.instagram.com/boutiquedelmistero_yt/" target="blank"><img src="img/instagram-new.png"></a>
			<a href="https://www.youtube.com/channel/UCuEDlaY-RUA9OpfLH--nf-A" target="blank"><img src="img/youtube-new.png"></a>
			<a href="https://twitter.com/symposium_arts"><img src="img/twitter-new.png"></a>
		</div>
	</div>
	<div id="landing">
		<!--<div id="homeImgCont"></div>-->
	</div>
	<div id="lavori">
		<div class="flex-container">
			<div class="box one">
				<a href="https://www.youtube.com/channel/UCuEDlaY-RUA9OpfLH--nf-A" target="blank">
				<h3>Canale Yt</h3>
				<p>Una raccolta di produzioni audiovisive: sketch, webisodes, corti e molto altro...</p></a>
				<iframe allowfullscreen width="99%" height="200px" 
					src="https://www.youtube.com/embed/x9RrHhrWC-Y">
				</iframe>
			</div>
			<div class="box two">
				<h3>Musiche</h3>
				<p>Sezione dedicata a nostre libere composizioni musicali da ascoltare in ogni momento</p>
				<iframe width="100%" height="200px" //scrolling="no" //frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/322429242&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
			</div>
			<div class="box three">
				<!--<a href="teatro.php">-->
				<h3>Teatro</h3>
				<p>Altro giro, altra passione: fotografie e spezzoni di spettacoli passati; date e biglietti per le prossime performance</p>
				<div class="comingSoon" id="comingsoon1">COMING SOON</div>
				</a>
			</div>
			<div class="box four">
				<h3>Radio</h3>
				<p>Intrattenimento settimanale con protagonisti ospiti, dibattiti, musiche e attualità</p>
				<div class="comingSoon" id="comingsoon2">COMING SOON</div>
			</div>
			<div class="box five">
				<a href="http://www.lulu.com/spotlight/gabrielesoatto"><h3>Libri</h3>
				<p>Raccolta di romanzi, poesie e testi teatrali in versione cartacea o elettronica</p></a>
			</div>
		</div>
	</div>
	<div id="servizi">
		<div class="flex-container">
			<div class="box six">
				<h3>Fotografia e Grafiche</h3>
				<p>Che sia per il tuo profilo Instagram, la copertina del tuo ultimo album o un evento da ricordare noi realizziamo ciò che ti serve</p>
				<div class="contattaci" id="contattaci1"><a class="contattaciLink" href="#contatti">CONTATTACI</a></div>
			</div>
			<div class="box seven">
				<h3>Editing</h3>
				<p>Video musicali, sketch pubblicitari, riprese di feste e matrimoni sono solo alcuni dei servizi di registrazione e montaggio video che puoi richiedere</p>
				<div class="contattaci" id="contattaci2"><a class="contattaciLink" href="#contatti">CONTATTACI</a></div>
			</div>
			<div class="box eight">
				<h3>Basi Musicali</h3>
				<p>Una vasta collezione di brani, melodie, composizioni e basi di ogni genere da acquistare con varie licenze</p>
			</div>
			<div class="box nine">
				<h3>Scritti</h3>
				<p>Chiunque abbia bisogno di servizi di scrittura o ghostwriting di qualunque tipologia si trova nella sezione giusta!</p>
				<div class="contattaci" id="contattaci3"><a class="contattaciLink" href="#contatti">CONTATTACI</a></div>
			</div>
			<div class="box ten">
				<h3>Gadgets</h3>
				<p>Clicca qui se cerchi idee originali ed artistiche per l'acquisto di una maglietta, un poster, una tazza e quant'altro </p>
				<div class="comingSoon" id="comingsoon3">COMING SOON</div>
			</div>
		</div>	
	</div>
	<div id="contatti">
		<div id="Email-form">
			<h3>CONTATTACI</h3><br>
			<!--<form action="send.php" method="post">
				<input type="text" name="name" placeholder="Nome" required><br>
				<input type="email" name="email" placeholder="Indirizzo E-Mail" required><br>
				<legend>SERVIZIO (FACOLTATIVO)</legend>
				<select name="object">
					<option>Nessun Servizio</option>
					<option>Foto</option>
					<option>Editing</option>
					<option>Musica</option>
					<option>Scritti</option>
				</select>
				<textarea id="message" name="message" cols="20" rows="4" placeholder="Messaggio" required></textarea><br>
				<input id="send" type="submit" name="submit" value="INVIA">
			</form>-->
			<p>Per collaborazioni, richieste di servizi o semplice corrispondenza:<br><a><strong>SYMPSTUDIO@GMAIL.COM</strong></a><br>oppure scrivici sui social: Facebook e Instagram</p>
		</div>
	</div>

	<!--<div id="footer">
		
	</div>-->
	<script>
		function parallax(){
			var prlx_ly_1 =	document.getElementById('homeImgCont');
			prlx_ly_1.style.top = -(window.pageYOffset / 3.5)+'px';
		}
		window.addEventListener("scroll", parallax, false);
	</script>
	<script>
		window.addEventListener("load", function(){
			var load_screen = document.getElementById("load_screen");
			document.body.removeChild(load_screen);
		});
	</script>
	<script type="text/javascript" src="pace.js"></script>
	<script type="text/javascript" src="symposium.js"></script>
</body>
</html>