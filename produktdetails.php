<!DOCTYPE html>

<html lang="de">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="stylesheet" type="text/css" href="style.css"/>
        <link rel="stylesheet" type="text/css" media="screen and (max-width: 700px)" href="style_mobil.css"/>
		<link rel="icon" href="images/logo.png">
		<title>Windmann Laubbläser</title>
			</head>

	<body>

		<?php 
			$id = $_GET['id'];
			$modell="";
			$nettopreis=0;
			$details="";
			$blaskraft=0;
			$produktbild="";

			$file_json = file_get_contents('products.json');
			$decoded_json = json_decode($file_json, true);
			
			foreach($decoded_json as $produkt){
				if($produkt['ProduktID']==$id){
					$modell=$produkt['Modell'];
					$nettopreis=$produkt['Nettopreis'];
					$details=$produkt['Details'];
					$blaskraft=$produkt['Blaskraft'];
					$produktbild=$produkt['Produktbild'];
					break;
				}
			}


		?>

		<header>
			<div class="header">

				<div class="hamburger_wrapper">
					<div class="hamburger">
						<hr id="hr-1">
						<hr id="hr-2">
						<hr id="hr-3">
					</div>
				</div>

				<div id="upper_header">
					<img src="images/logo.png" width="100px" height="100px" alt="Logo von Windmann"/>
					<h1>WINDMANN</h1>
					<h2>Wissen, woher der Wind weht</h2>
				</div>

			<nav>
				<ul>
					<li><a href = "index.html">Home</a></li>
					<li id="nav_highlighted"><a href = "produkte.php">Produkte</a></li>
					<li><a href = "service.html">Service</a></li>
					<li><a href = "community.php">Community</a></li>
					<li><a href = "impressum.html">Impressum</a></li>
					<li><a href = "warenkorb.html">Warenkorb</a></li>
				</ul>
			</nav>
			</div>
		</header>


		<main class="content">

			<h2 class="artikelHeader"><?php echo $modell ?></h2>

			<div class="produktbild-kosten">

				<div class="produktbild">
					<img src="<?php echo $produktbild ?>"  alt="<?php $modell ?>">
				</div>

				<div class="kosten">

					<p>Preis: <?php echo $nettopreis ?>€<br/>
					z.Z. MwSt. 19%<br/>
					z.Z. Versandtkosten 19,95€<br/>
					</p>
					<div class="anzahl_kont">
					
						<label for="anzahl">Anzahl:</label>
					    <select class="mengen_angabe_produkt" name="Menge">
							<option value="0" selected>1</option>
							<option value="1">2</option>
							<option value="2">3</option>
							<option value="3">4</option>
							<option value="4">5</option>
							<option value="5">6</option>
							<option value="6">7</option>
							<option value="7">8</option>
							<option value="8">9</option>
							<option value="9">10</option>
						</select>
					</div>
					<button type="submit">In den Warenkorb</button>
				</div>
			</div>
			</div>
			<div class="produktinfo_container">
				<div class="produktinfo0">
					<p>Artikelnummer: <?php echo $id ?></p>
					<br/>
					<p>Detail:</p>
					<ul>
						<?php echo $details ?>
					</ul>

					<br/><br/><br/>
					<p>Blaskraft</p>
					<p><b><?php echo $blaskraft ?>N</b></p>
				</div>
			</div>

		</main>
        		<!-- Fusszeile -->
		<footer>
			<div class="footer_element">
				<h5>Windmann-Seite</h5>
				<p><a href="impressum.html">Impressum</a></p>
				<p><a href="datenschutz.html">Datenschutz</a></p>
			</div>

			<div class="footer_element">
				<h5>Kontakt</h5>
				<h6><a href="mailto:service@laubblaeser.de">service@laubblaeser.de</a></h6>
				<p>Öffnungszeiten:</p>
				<p>Mo-Fr</p>
				<p>10-16 Uhr</p>
			</div>

			<div class="footer_element">
				<h5>Telefon/Fax</h5>
				<h6>Tel: 0800 912345</h6>
				<p>Fax: 0800 912346</p>
			</div>

			<div class="footer_element">
				<h5>Hilfe</h5>
				<h6><a href ="service.html">Kundenservice</a></h6>
			</div>


		</footer>
			<script src="app.js"></script>
		</body>

    </html>
