<?php
  $firstVar = 0;
  $secondVar = 5;
 ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 2</title>
  </head>
  <body>
    <?php
      while ($firstVar <= 20) {
        $result = $firstVar * $secondVar;
        echo ' | ' . $result;
        $firstVar++;
      }
     ?>
  </body>
</html>
