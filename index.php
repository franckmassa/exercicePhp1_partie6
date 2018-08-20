<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 1</title>
  </head>
  <body>
    <?php
    //Affichage des paramètres de l'url
    //$_GET = variable superGlobale
    if(!empty($_GET['lastname']) && !empty($_GET['firstname'])){
      echo $_GET['firstname'] . ' ' . $_GET['lastname'];
    } else {
        echo 'Veuillez vérifier les paramètres d\'url';
    }
    ?>
  </body>
</html>