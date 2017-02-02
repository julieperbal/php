<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<!-- TP1 -->
 <?php

//   echo 'Merci d\'avoir choisi Vroum-Vroum !<br>';
//   echo 'Quel carburant choisissez-vous?<br>';
//
// if ($carburant == 'Gazole'){
//    echo 'Gazole<br>';
// }
// elseif ($carburant == 'SuperSP') {
//   echo 'SuperSP<br>';
// }
// else {
//   echo 'GPL<br>';
// }

?>

<!-- TP2 -->
<?php

// $salaire = 2000;
// $branche = 'informatique';
// $precision = 'L\'informatique est la branche dans laquelle je travaille.';
// $note = 11.5;
//
// echo 'Le salaire auquel j\'aspire pour bien vivre: <strong>'.$salaire.'</strong> €<br>';
// echo 'La branche dans laquelle je travaille ou souhaiterais travailler: <strong>'.$branche.'</strong><br>';
// echo 'Pour préciser: <strong>'.$precision.'</strong><br>';
// echo 'La note moyenne que j\'ai obtenue au bac: <strong>'.$note.'</strong><br>';
?>

<!-- TD3 -->
<!-- <form name="imc" action="index.php" method="post">
  Entrez votre prénom: <input type="text" name="prenom" value="">;
  Entrez votre taille (sous la forme 1.70): <input type="text" name="taille" value="">;
  Entrez votre poids: <input type="text" name="poids" value="">;
  <input type="submit" name="valider" value="OK"/>
</form> -->

<?php

// if (isset ($_POST['valider'])) {
//
//   $prenom = $_POST['prenom'];
//   $taille = $_POST['taille'];
//   $poids = $_POST['poids'];
//   $imc = $poids/($taille*$taille);
//
//   echo 'Bonjour '.$prenom.'<br/>';
//   echo 'Votre IMC est exactement: '.$imc.'<br/>';
//
// if ($imc < 16.5) {
//   echo 'Vous êtes en dénutrition!';
//   }
//
// elseif ($imc < 18.5) {
//   echo 'Vous êtes en maigreur!';
//   }
//
// elseif ($imc < 25) {
//   echo 'Vous avez une corpulence normale.';
//   }
//
// elseif ($imc < 30) {
//   echo 'Vous êtes en surpoids!';
//   }
//
// else {
//   echo 'Vous êtes obèse!';
//   }
// }
?>

<!-- TD4 -->
<!-- <form class="" action="index.php" method="post">
  Entrez votre nom: <input type="text" name="nom">;
  Entrez votre prénom: <input type="text" name="prenom">;
  Entrez votre âge: <input type="text" name="age">;
  Entrez votre ville: <input type="text" name="ville">;
  Entrez votre activité: <input type="text" name="activite">;
  <input type="submit" name="valider" value="OK">;
</form> -->

<?php
// if (isset($_POST['valider'])) {
//   foreach ($_POST as $index => $valeur) {
//     if ($index !='valider') {
//       echo '- '.$index.' : '.$valeur.'<br>';
//     }
//   }
// }
 ?>

 <!-- TD5 -->
 <?php
include('fonctions.php');
?>

<form class="" action="fonctions.php" method="post">
  Entrez un nombre (entre 1 et 10000): <input type="text" name="num">;
  <input type="submit" name="valider" value="OK">;
</form>

<?php
  if (isset($_POST['valider'])) {
    $nombre = $_POST['num'];
    $total = nombrepremier($nombre);

    // echo 'Ce nombre est '.$total;
    nombrepremier();
  }

 ?>


  </body>
</html>
