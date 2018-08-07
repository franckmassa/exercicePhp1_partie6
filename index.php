<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice1</title>
  </head>
  <body>
  <?php
  //Test des paramètres de l'url et afffichage des valeurs
  if(isset($_GET['firstname']) && isset($_GET['lastname'])){
    //Affichage des valeurs
    echo  $_GET['firstname']. ' ' . $_GET['lastname'];
  }
   ?>
</body>
</html>
