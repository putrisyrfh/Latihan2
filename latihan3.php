<!DOCTYPE html>
<html>
<head>
	<title>Document</title>
</head>
<body>
	<table border="1" cellpadding="10" cellspacing="0"> 
		<?php for($baris=1; $baris <=3; $baris++) : ?> //ini php
		<tr> //html
			<?php for($kolom=1; $kolom <=5; $kolom++) : ?> //php
				<td><?= "$baris,$kolom" ?></td>
			<?php endfor; ?>
		</tr>
	<?php endfor; ?>
	</table>
</body>
</html>  