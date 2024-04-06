	<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST"){
		$nombre = $_POST["nombre"] ?? null;
		if ($nombre == 0){
			echo "<p>Malheureusement le nombre que vous avez</p>";
			echo "<p>indiqué en l'occurrence <u>$nombre</u> n'est pas</p>";
			echo "<p>simultanément un multiple de 3 et de 5.</p><br>";
		}
		elseif ($nombre%3 == 0 && $nombre%5 == 0){
			echo "<p>Le nombre que vous avez indiqué en</p>";
			echo "<p>l'occurrence <u>$nombre</u> est bien simultanément</p>";
			echo "<p>un multiple de 3 et de 5.</p><br>";
		}
		else{
			echo "<p>Malheureusement le nombre que vous avez</p>";
			echo "<p>indiqué en l'occurrence <u>$nombre</u> n'est pas</p>";
			echo "<p>simultanément un multiple de 3 et de 5.</p><br>";
		}
	}
	?>