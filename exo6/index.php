<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title> Exercice 6 </title>
</head>
<body>
  <?php if (isset($_GET['building']) && isset($_GET['room'])) {
      echo $_GET['building'] . ' ' . $_GET['room'];
     }
    ?>
  </body>
  </html>
