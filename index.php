<!DOCTYPE html>
<html lang="es-es">
<head>
	<title>aiSearch | Buscador inteligente</title>
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
	<meta charset="utf-8">
	<link rel="stylesheet" href="inline.css">
</head>
<body>
<div class="header">
	<ul>
		<li><a href="search">Productos</a></li>
		<li><a href="search">Nosotros</a></li>
		<li class="login"><a href="search">Empieza a ganar</a></li>
	</ul>
</div>

<div class="searchEngine">
	<h1><b>ai</b>Search</h1>
	<form method="GET">
		<div class="search">
			<input class="input" type="text" name="search">
		</div>

		<div class="submit">
		<button type="submit" name="submit">Google Search</button>
		<button type="submit" name="submit">Nuestros productos</button>
		</div>
	</form>
</div>
<?php
	if (isset($_GET["submit"])) {
		$search = $_GET["search"];
		header("Location: https://www.google.com/search?q=$search");
		exit;
	}
?>

<h3>Publicidad</h3>
<div class="ads">
	<div class="col"></div>
	<div class="col"></div>
	<div class="col"></div>
</div>

<div class="footer">
	<div>
		<ul>
			<li>Privacidad</li>
			<li>Términos</li>
			<li>Cookies</li>
			<li>2019 &copy; AIsearch</li>
		</ul>
	</div>
</div>
<script src="app.js"></script>
<!--
</body>
</html>