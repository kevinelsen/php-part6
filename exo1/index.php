<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title> Exercice 1 </title>
</head>
<body>
  <?php if (isset($_GET['firstname']) && isset($_GET['lastname'])) {
      echo $_GET['firstname'] . ' ' . $_GET['lastname'];
     }
    ?>
  </body>
  </html>
