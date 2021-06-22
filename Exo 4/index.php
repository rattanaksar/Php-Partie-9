<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Partie9_exo4</title>
</head>
<body>
  <h1>Exo 4 partie 9</h1>
  <p>Afficher le timestamp du jour.  
Afficher le timestamp du mardi 2 août 2016 à 15h00.</p>
<p> Le timestamp du jour: <?= time(); ?> </p>
<!--Pour a connaitre à une date précise, strtotime() avec la date-->
<p>Le timestamp du mardi 2 août 2016 à 15h00: <?= strtotime('02/08/2016 15:00'); ?></p>
</body>
</html>