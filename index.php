<?php
require_once 'utils.php';
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Random Pok&eacute;mon Generator</title>
	<link rel="stylesheet" type="text/css" href="/style.css">

	<meta name="description" content="This tool generates random Pok&eacute;mon by region, type, and more.">

	<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

	<link rel="alternate" type="application/rss+xml" title="Random Pok&eacute;mon Generator Feed" href="http://feeds.feedburner.com/RandomPokemonGenerator">
	<link href="/favicon.ico" type="image/x-icon" rel="shortcut icon">

	<link rel="apple-touch-icon" href="/touch-icon-iphone.png" /> 
	<link rel="apple-touch-icon" sizes="76x76" href="/touch-icon-ipad.png" /> 
	<link rel="apple-touch-icon" sizes="120x120" href="/touch-icon-iphone-retina.png" />
	<link rel="apple-touch-icon" sizes="152x152" href="/touch-icon-ipad-retina.png" />
	
	<script src="analytics.js"></script>
	<script>
		logToAnalytics();
	</script>
	<script src="random.js"></script>
</head>
<body>


<header>
	<h1>Random Pok&eacute;mon Generator</h1>
</header>

<form action="/" method="get" id="controls">
	<fieldset><label>Generate <select name="n" id="n"><?php
for ($i = $default['n_low']; $i <= $default['n_high']; $i++) {
	$selected_text = ($default['n']) ? ' selected' : '';
	echo '<option value="' . $i . '"' . $selected_text . '>' . $i . '</option>';
}
		?></select>
		Pok&eacute;mon.</label>

		<select name="region" id="region">
		<option value="all">All Regions</option>
		<option value="kanto">Kanto</option>
		<option value="johto">Johto</option>
		<option value="hoenn">Hoenn</option>
		<option value="sinnoh">Sinnoh</option>
		<option value="sinnoh_pt">Sinnoh (Plat.)</option>
		<option value="unova">Unova</option>
		<option value="unova_b2w2">Unova (B2W2)</option>
		<option value="kalos">Kalos</option></select> 

		<select name="type" id="type">
		<option value="all">All Types</option>
		<option value="bug">Bug</option>
		<option value="dark">Dark</option>
		<option value="dragon">Dragon</option>
		<option value="electric">Electric</option>
		<option value="fairy">Fairy</option>
		<option value="fighting">Fighting</option>
		<option value="fire">Fire</option>
		<option value="flying">Flying</option>
		<option value="ghost">Ghost</option>
		<option value="grass">Grass</option>
		<option value="ground">Ground</option>
		<option value="ice">Ice</option>
		<option value="normal">Normal</option>
		<option value="poison">Poison</option>
		<option value="psychic">Psychic</option>
		<option value="rock">Rock</option>
		<option value="steel">Steel</option>
		<option value="water">Water</option>
		</select>
	</fieldset>

	<fieldset>
		<label><input type="checkbox" id="ubers" name="ubers" value="true" <?php if($default['ubers']){echo 'checked';} ?>><abbr title="Overpowered Pok&eacute;mon not used in standard play.">Ubers</abbr></label>

		<label><input type="checkbox" id="nfes" name="nfes" value="true" <?php if($default['nfes']){echo 'checked';} ?>><abbr title="Pok&eacute;mon that are Not Fully Evolved.">NFEs</abbr></label>

		<label><input type="checkbox" id="sprites" name="sprites" value="true"<?php if($default['sprites']){echo 'checked';} ?>>Sprites</label>
		<label><input type="checkbox" id="natures" name="natures" value="true"<?php if($default['natures']){echo 'checked';} ?>>Natures</label>

		<input id="go" value="Generate!" type="button" onclick="generateRandom()">
	</fieldset>
</form>

<section id="results"></section>


<footer>
	<p><a href="http://feeds.feedburner.com/RandomPokemonGenerator">RSS</a> | <a href="mailto:hi@callmedrew.com">Contact</a> | Pok&eacute;mon is &copy; 1995-<?php echo date('Y'); ?> Nintendo. Website is &copy; <?php echo date('Y'); ?> <a href="http://callmedrew.com/">Drew Mitchell</a>.</p>
</footer>

</body>
</html>