<!DOCTYPE html>
<html>
<head>
	<title>Mines'perium</title>
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<link rel="stylesheet" type="text/css" href="style/style_membres.css">
	<meta charset="utf-8">
</head>

<body>
	
	<?php include("menu.php"); ?>
	<div class="presentations">

	<?php for($i = 1; $i < 6 ; $i++){

		echo "<img src='img/membres/0guest".$i.".png'>";
	}?>
	</div>

	
	<?php include("reseaux_sociaux.php"); ?>
	<?php include("partenaires.php"); ?>

</body>
<footer>
	<p class="credits">Liste BDE Mines Saint-Etienne 2K18 - Mines'perium - Copyright BDE's Nerds</p>
</footer>
</html>