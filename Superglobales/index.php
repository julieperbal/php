<?php
  session_start();
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Superglobales</title>
</head>
<body>

<!-- EXERCICE 1 -->
  <?php
    // echo 'Ton adresse IP est: '.$_SERVER['REMOTE_ADDR'].',<br>ton nom de serveur est: '.$_SERVER['HTTP_HOST'].',<br>et ton user agent est: '.$_SERVER['HTTP_USER_AGENT'];
   ?>

<!-- EXERCICE 2 -->
  <?php
    // $_SESSION['prenom']='Julie';
    // $_SESSION['nom']='Perbal';
    // $_SESSION['age']= 29;
   ?>
   <!-- <a href="index2.php">Autre fenêtre!</a> -->

<!-- EXERCICE 3 -->
  <!-- <form class="" action="form.php" method="post">
    <input type="text" name="login" value="Login">
    <input type="text" name="mot_de_passe" value="Password">
    <input type="submit" name="valider" value="Valider">
  </form> -->

<!-- EXERCICE 5 -->
<!-- L'exercice 4 fait automatiquement la modification des cookie lorsqu'on valide le formulaire, les cookies s'écrasent automatiquement, ils ne su cumulent pas! -->

</body>
</html>
