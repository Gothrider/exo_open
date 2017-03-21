<?php

$_GET[speudo]=speudos;
$_GET[pass]=mdp;

if (speudos=="Gothrider"] && mdp==3103)
{
	echo "les codes sont 15A4D355";
}
else
{
	echo 'Votre login ou votre mot de passe est incorrect veuillez réessayer';
	echo 'cliquez <a href="formulaire.php"> ICI</a>';
}

?>
