<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title> Exercice 2 </title>
</head>
<body>
  <?php if (isset($_GET['firstname']) && isset($_GET['lastname']) && isset($_GET['age'])) {
      echo $_GET['firstname'] . ' ' . $_GET['lastname'] . ' ' .  $_GET['age'];
    } else {
      echo 'veuillez renseigner l\'age';
    }
    ?>
  </body>
  </html>
