<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>LS-0000000001 | LunéStreet</title>
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
	<!-- <link rel="stylesheet" type="text/css" href="../@fortawesome/fontawesome-free/css/all.min.css"> -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/fontawesome.min.css">
	<link rel='stylesheet' type="text/css" href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
	<link rel='stylesheet' type="text/css"href='https://cdn-uicons.flaticon.com/uicons-solid-rounded/css/uicons-solid-rounded.css'>
	<link rel="stylesheet" type="text/css" href="../assets/css/global.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<body>

<!-- START SIDEBAR -->
	<?php require('./models/sidebar.php'); ?>
<!-- END SIDEBAR -->


<!-- START FIL -->
	<div class="fil" id="fil">
		<?php require('./models/header.php'); ?>

		<div class="fil__content">
			<div class="fil__actus">
				<?php require('./models/post.php'); ?>
			</div>
			<?php require('./models/top-lspoints.php'); ?>
		</div>
	</div>
<!-- END FIL -->


<!-- START CHAT -->
	<?php require('./models/chat.php'); ?>
<!-- END CHAT -->


	<script type="text/javascript" src="../assets/js/ChatModal.js"></script>
</body>
</html>