<?php
/* OPDRACHT 1 + 2 VARIABLES
$getal = 18;
echo var_dump(is_int($getal)."\n";
*/


/* OPDRACHT 1 ARRAY + FOR LOOP
$klas = ["Piet van Dijk", "Rembrandt van Rijn", "Vincent van Gogh", "Floris van Dyck"];
var_dump($klas);
*/

/* OPDRACHT 2 + 3 ARRAY + FOR LOOP
$klas = ["Piet van Dijk", "Rembrandt van Rijn", "Vincent van Gogh", "Floris van Dyck"];


for ($i=0; $i < count($klas) ; $i++) {
	echo $klas[$i], PHP_EOL,"<br>";
}


foreach ($klas as $i) {
	echo $i, PHP_EOL, "<br>";
}
*/

/*
$bucket_list= [];
$hoeveelheid_activiteiten=readline("Hoeveel activiteiten wil je toevoegen aan je bucket list?");

for ($i=0; $i < $hoeveelheid_activiteiten ; $i++) {
	$bucket_list[$i]= readline("welke activiteiten wil je toevoegen?");
}

var_dump($bucket_list);

foreach ($bucket_list as $a) {
	echo $a, PHP_EOL;
}
*/
?>
