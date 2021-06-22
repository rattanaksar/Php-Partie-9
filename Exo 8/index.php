<?php
    $date22 = date('d-m-Y', strtotime('- 22 days'));//strtotime formate la date en timestamp
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Partie9_exo8</title>
</head>
<body>
<h1>Exo 8 partie 9</h1>
<p>Afficher la date du jour - 22 jours</p>
<p>le calcul est <?= $date22 ?></p>
</body>
</html>