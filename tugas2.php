<?php
// bilangan genap //
echo "Bilangan Genap 1-20: <br>";
for ($genap=1; $genap <= 20; $genap++) {
	if ($genap %2 == 0) {
		echo $genap;
		echo "<br>";
	}
}

// bilangan ganjil //
echo "<br> <br> Bilangan Ganjil 1-20 <br>";
for ($ganjil=1; $ganjil <= 20 ; $ganjil++) { 
	if ($ganjil %2 == 1) {
		echo $ganjil;
		echo "<br>";
	}
}
