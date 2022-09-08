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

	<div class="sidebar">
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

	<div class="chat">
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

</body>
</html>