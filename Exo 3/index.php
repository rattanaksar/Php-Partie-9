<?php
    $date = strftime('%A %d %B %Y');
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Partie9_exo3</title>
</head>
<body>
  <h1>Exo 3 partie 9</h1>
  <p>Afficher la date courante avec le jour de la semaine et le mois en toutes lettres (ex : mardi 2 août 2016)</p>
  <p><?= 'Nous sommes le' . ' ' .$date?></p>
</body>
</html>