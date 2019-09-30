<!DOCTYPE html>
<html>
<head>
	<title>Document</title>
</head>
<body>
	<table border="1" cellpadding="10" cellspacing="0"> 
		<?php
			for ($baris=1; $baris <= 3 ; $baris++) { //pengulangan pembuatan baris
				echo "<tr>";
				for ($kolom=1; $kolom <= 5; $kolom++) { //pengulangan pembuatan kolom
					echo "<td>$baris,$kolom</td>";
				 	# code...
				 } 
				 echo "</tr>";
				# code...
			}

		?>
	</table>
</body>
</html>