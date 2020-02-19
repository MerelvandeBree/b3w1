<?php

	$getal1 = rand(0, 100);
	$getal2 = rand(0, 100);

	echo $getal1 . " x " . $getal2 . " = " . ($getal1 * $getal2) . "<br><br>";

	tafel(6);
	function tafel($getal3) {
		for ($i=1; $i <= 10; $i++) { 
			echo $i . " x " . $getal3 . " = " . ($i * $getal3) . "<br>";
		}
		echo "<br>";
	}
	

	$tafels = [3, 5, 8, 12];

	foreach ($tafels as $value) {
		for ($i=1; $i <= 10; $i++) { 
			echo $i . " x " . $value . " = " . ($i * $value) . "<br>";
		}
		echo "<br>";
	}

?>