<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title> Exercice 4 </title>
</head>
<body>
  <?php if (isset($_GET['language']) && isset($_GET['server'])) {
      echo $_GET['language'] . ' ' . $_GET['server'];
     }
    ?>
  </body>
  </html>
