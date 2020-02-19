<?php

	define("age", 18);
	define("garage", false);
	define("color", "geel");


	if (age < 18) {
		if (garage == false) {
			echo "Bij jou staat jouw mountainbike in de kleur " . color . " gewoon voor de deur!";
		}
		else {
			echo "Jij stalt jouw vespa scooter in de kleur " . color . " netjes in je eigen garage.";
		}
	}
	else {
		if (garage == false) {
			echo "Jij hebt een Skoda Octavia in de kleur " . color . " op de oprit staan.";
		}
		else {
			echo "Wat goed dat jij die Ferarri in de kleur " . color . " in je garage opslaat!";
		}
	}
?>