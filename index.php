<!DOCTYPE html>
<html lang="es-es">
<head>
	<title>AIsearch | Buscador inteligente</title>
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
	<meta charset="utf-8">
	<link rel="stylesheet" href="inline.css">
</head>
<body>
<div class="header">
	<h1><b>AI</b>search</h1>
	<ul>
		<li><a href="search">Productos</a></li>
		<li><a href="search">Nosotros</a></li>
		<li><a href="search">EMPIEZA A GANAR</a></li>
	</ul>
</div>
<div class="promo">
	<div class="info">
	<h2>Gana dinero por navegar con Google</h2>
	<p>Registrate y empieza a usar Google desde nuestra página.</p>
	<a href="search">NAVEGA AHORA</a>
	</div>
	<div class="image">
		<image src="images/untitled.png" height="300px">
	</div>
</div>

<div class="promo steps">
	<div class="info">
	<h2>Empieza a ganar dinero muy rápido</h2>
	<ul>
		<li>Registrate.</li>
		<li>Usa Google desde nuestra página.</li>
	</ul>
	</div>
</div>

<div class="searchEngine">
	<h1><b>AI</b>search</h1>
	<form method="GET">
		<div class="search">
			<input class="input" type="text" name="search">
		</div>

		<div class="submit">
		<button type="submit" name="submit">Search with Google</button>
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

<footer>
	<ul>
		<li>Productos</li>
		<li>Nosotros</li>
	</ul>
	<ul>
		<li>2019 &copy; AIsearch</li>
	</ul>
</footer>
<script src="app.js"></script>
</body>
</html>