<?php
$febDays = cal_days_in_month(CAL_GREGORIAN, 2, 2016); // 28
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Partie9_exo6</title>
</head>
<body>
<h1>Exo 6 partie 9</h1>
<p>Afficher le nombre de jour dans le mois de février de l'année 2016.</p>
<p><?= 'Il y avait' . ' ' . $febDays . ' ' . 'Jours en Février 2016.';?></p>
</body>
</html>