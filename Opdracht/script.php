<?php 
		date_default_timezone_set('Europe/Amsterdam');

		$tijd = date("H:i");
		$tijdstip = date("H");

		if ($tijdstip >= 6 && $tijdstip < 12) {
			echo "<h1>Goede morgen</h1>";
			$achtergrond = "goedemorgen";
		}
		elseif ($tijdstip >= 12 && $tijdstip < 18) {
			echo "<h1>Goede middag</h1>";
			$achtergrond = "goedemiddag";
		}
		elseif ($tijdstip >= 18 && $tijdstip < 0) {
			echo "Goede avond";
			$achtergrond = "goedeavond";
		}
		elseif ($tijdstip >= 0 && $tijdstip < 6) {
			echo "Goede nacht";
			$achtergrond = "goedenacht";
		}

		echo "<p>Het is nu <p>" . $tijd;
	?>

<!DOCTYPE html>
<html>
<head>
	<title>Goede morgen/middag/avond/nacht</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class=<? echo $achtergrond ?>>
	<div></div>
</body>
</html>