<?php
$datetime1 = new DateTime('2016-05-16'); //new sert à instancier la classe Date Time qui fait de $datetime1 un objet.
$datetime2 = new DateTime('2021-06-22');
$interval = $datetime1->diff($datetime2);//diff retourne la différence interval entre deux objets.
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Partie9_exo5</title>
</head>
<body>
<h1>Exo 5 partie 9</h1>
<p>Afficher le nombre de jour qui sépare la date du jour avec le 16 mai 2016</p>
<p><?= 'Il s\'est écoulé' . ' ' . $interval->format('%a') .' jours entre le 16 mai 2016 et le 22 juin 2021.';// retourne?></p>
</body>
</html>