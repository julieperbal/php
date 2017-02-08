<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Les Tableaux</title>
</head>
<body>

<!-- EXERCICE 1 -->
<?php
  $myTab = array('Janvier','Février','Mars','Avril','Mai','Juin','Juillet','Aout','Septembre','Octobre','Novembre','Décembre');
 ?>

<!-- EXERCICE 2 -->
<?php
  // echo $myTab[2];
 ?>

<!-- EXERCICE 3 -->
<?php
  // echo $myTab[5];
 ?>

<!-- EXERCICE 4 -->
<?php
  // $myTab[7] = 'Août';
  // echo $myTab[7];
 ?>

<!-- EXERCICE 5 -->
<?php
  $myTab = array('Ain','Aisne','Allier','Alpes de Haute Provence','Hautes Alpes','Alpes Maritimes','Ardèche','Ardennes','Ariège','Aube','Aude','Aveyron','Bouches du Rhône','Calvados','Cantal','Charente','Charente Maritime','Cher','Corrèze','Corse du Sud','Haute Corse');
 ?>

<!-- EXERCICE 6 -->
<?php
  // echo $myTab[11];
 ?>

<!-- EXERCICE 7 -->
<?php // Ajouter une donnée dans le tableau
  // array_push($myTab, "Marne");
  // echo print_r($myTab);
 ?>

<!-- EXERCICE 8 -->
<?php // Afficher toutes les données d'un tableau
  // foreach ($myTab as $mois) {
  //   echo $mois.'<br>';
  // }
 ?>

<!-- EXERCICE 9 -->
<?php // Afficher toutes les valeurs du tableau
  // foreach ($myTab as $departements) { // as $departements permet de stocker tous les départements dans cette variable et donc de n'afficher qu'elles.
  //   echo $departements.'<br>';
  // }
 ?>

<!-- EXERCICE 10 -->
<?php
  // foreach ($myTab as $key => $mois) {
  //   echo 'Le département '.$mois.' a le numéro '.$key.'<br>';
  // }
 ?>

</body>
</html>
