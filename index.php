<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css" />
  <title>Exercice 4 Partie 3 PHP</title>
</head>
<body>
  <?php
  // Je remplis la variable $firstNumber
  $firstNumber = 1;
  while ($firstNumber <= 10) { //Tant que la valeur de $firstNumber est inférieure à 10,
    echo $firstNumber . '<br />'; //On affiche la valeur de $firstNumber,
    $firstNumber = $firstNumber+($firstNumber/2); //puis on remplace son contenu par son addition à son quotient (obtenu via ($firstNumber/2)
  }
  ?>
</body>
</html>
