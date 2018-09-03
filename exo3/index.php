<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title> Exercice 3 </title>
</head>
<body>
  <?php if (isset($_GET['startDate']) && isset($_GET['endDate'])) {
      echo $_GET['startDate'] . ' ' . $_GET['endDate'];
     }
    ?>
  </body>
  </html>
