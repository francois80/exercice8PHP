<?php
$number1 = 125;
$number2 = 75;
function multiplier($int1, $int2){
	$result = (int)$int1 * (int)$int2;
	return $result;
}?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
	<meta charset="utf-8">
	<title>Exercice 8 PHP</title>
</head>
<body>
	<h1>Créer deux variables contenant des nombres.
		Créer une fonction qui retourne le résultat de leur multiplication.
		Afficher le résultat.</h1>
		<p>voici ma 1ere variable $number1 : <?= $number1 ?></p>
		<p>voici ma 2eme variable $number2 : <?= $number2 ?></p>
		<p>et voici le résultat de la fonction de multiplication : <?= multiplier($number1,$number2) ?></p>
	</body>
	</html>
