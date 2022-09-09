<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>LunéStreet - School networks</title>
	<meta name="description" content="Réseaux sociale dédié aux établissements scolaire de Lunéville.">
	<meta name="author" content="KasutageDEV">
	<meta property="og:locale" content="fr_FR">
	<meta property="og:image" content="#link#/img/thumbnail.png">
	<meta property="og:image:width" content="100%">
	<meta property="og:image:height" content="100%">
	<meta property="og:type" content="website">
	<meta property="og:url" content="#link#">
	<meta property="og:title" content="LunéStreet - School networks">
	<meta property="og:description" content="Réseaux sociale dédié aux établissements scolaire de Lunéville.">
	<link rel="canonical" href="#link#">
	<link rel="stylesheet" type="text/css" href="./@fortawesome/fontawesome-free/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="./assets/css/global.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>

<!-- START SIDEBAR -->
	<div class="sidebar" id="sidebar">
		<div class="sidebar__avatar">
			<img src="https://avatars.dicebear.com/api/adventurer-neutral/LS-0000000001.svg" class="sidebar__img">
		</div>
		<div class="sidebar__elmt">
			<h1>LS</h1>
			<p>0000000001</p>
		</div>
		<div class="sidebar__elmt">
			<h1>Établissement</h1>
			<p>Saint-pierre fourier</p>
		</div>
		<div class="sidebar__elmt">
			<h1>Classe</h1>
			<p>3<sup>ème</sup></p>
		</div>
		<div class="sidebar__elmt">
			<h1>LS Points</h1>
			<p>1000</p>
		</div>
		<a href="#" class="sidebar__logout">Déconnexion</a>
	</div>
<!-- END SIDEBAR -->





<!-- START FIL -->
	<div class="fil" id="fil">
		<header class="fil__header">
			<a href="#"><img src="./assets/imgs/Logo_t.png" class="fil__header-logo"></a>
			<div class="fil__header-nav">
				<a href="#" class="fil__header-link"><i class="fas fa-home"></i>Accueil</a>
				<a href="#" class="fil__header-link"><i class="fas fa-building"></i>Mon établissement</a>
			</div>
			<button type="button" class="fil__header-button"><i class="fas fa-plus"></i> Nouveau post</button>
		</header>

		<div class="fil__content">
			<div class="fil__actus">
				<div class="fil__post">
					<div class="fil__post__profil">
						<div class="fil__post__profil-left">
							<img src="https://avatars.dicebear.com/api/adventurer-neutral/LS-0000000001.svg" class="fil__post-avatar">
							<div class="fil__post-infos">
								<h4>LS-0000000001</h4>
								<h5>Le 08/09 à 01:56</h5>
							</div>
							<div class="fil__post-badge admin">ADMIN</div>
						</div>
						<div class="fil__post__profil-right">
							<a href="#"><i class="fas fa-exclamation-circle"></i> Signaler</a>
							<a href="#"><i class="far fa-heart"></i> J'aime</a>
						</div>
					</div>
				</div>
			</div>
			<div class="fil__top">
				<h1 class="fil__top-title">TOP 10 LS POINTS</h1>
				<div class="fil__top-item">
					<div class="fil__top__user">
						<img src="https://avatars.dicebear.com/api/adventurer-neutral/LS-0000000001.svg" class="fil__top__user-avatar">
						<div class="fil__top__user-infos">
							<h4>LS-0000000001</h4>
							<h5><b>1000</b> LS Points</h5>
						</div>
					</div>
					<div class="fil__top__num premier">
						1
					</div>
				</div>
				<div class="fil__top-item">
					<div class="fil__top__user">
						<img src="https://avatars.dicebear.com/api/adventurer-neutral/LS-0000000001.svg" class="fil__top__user-avatar">
						<div class="fil__top__user-infos">
							<h4>LS-0000000001</h4>
							<h5><b>1000</b> LS Points</h5>
						</div>
					</div>
					<div class="fil__top__num premier">
						1
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- END FIL -->





<!-- START CHAT -->
	<div class="chat" id="chat">
		<div class="chat__header">
			Chat en direct
		</div>

		<div class="chat__content">
			<div class="chat__message">
				<form method="POST" action="">
					<input type="hidden" name="message_id" value="1">
					<button class="chat__delete"><i class="fas fa-times"></i></button>
				</form>
				<div class="chat__message-profil">
					<img src="https://avatars.dicebear.com/api/adventurer-neutral/LS-0000000001.svg" class="chat__message-avatar">
					<div class="chat__message-infos">
						<h4>LS-0000000001</h4>
						<h5>Le 08/09 à 01:56</h5>
					</div>
					<div class="chat__message-badge admin">ADMIN</div>
				</div>
				<div class="chat__message-text">
					Lorem ipsum deydgeyfd uyegdeuzbdfuehf efdjshdf hfrh hfrhgrfgfhbfvhsdrfv rhfbrs. Lorem ipsum deydgeyfd uyegdeuzbdfuehf efdjshdf hfrh hfrhgrfgfhbfvhsdrfv rhfbrs
				</div>
			</div>
		</div>

		<div class="chat__form">
			<h3>Votre message</h3>
			<form method="POST" action="">
				<div class="chat__group">
					<textarea name="message" placeholder="Message...."></textarea>
					<button type="submit" name="submit_message"><i class="fas fa-paper-plane"></i></button>
				</div>
			</form>
		</div>
	</div>
<!-- END CHAT -->

</body>
</html>