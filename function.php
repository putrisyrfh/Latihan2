<?php
function salam($waktu, $nama){
	return "Selamat $waktu, $nama!";
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Document</title>
</head>
<body>
	<h1><?= salam("Sore","Putri"); ?></h1>
</body>
</html>