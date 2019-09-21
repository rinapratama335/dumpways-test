<!DOCTYPE html>
<html>
	<head>
		<title>Generate Serial Number</title>
	</head>
	<body>
		<?php
			echo "<h3 aign='center'>250 Serial Number</h3>";
			Function getRandomCode(){
				$an = "abcdefghijklmnopqrstuvwxyz0123456789";
				$su = strlen($an) - 1;
				return substr($an, rand(0, $su), 1);
			}
			
			for ($a=0; $a < 250 ; $a++) {
				for ($i = 0; $i < 4; $i++)
				echo getRandomCode();
				echo "-";
				for ($i = 0; $i < 4; $i++)
				echo getRandomCode();
				echo "-";
				for ($i = 0; $i < 4; $i++)
				echo getRandomCode();
				echo "-";
				for ($i = 0; $i < 4; $i++)
				echo getRandomCode();
				echo "<br>";
			}
		?>
	</body>
</html>