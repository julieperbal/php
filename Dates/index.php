<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Les Dates</title>
</head>
<body>

<!-- EXERCICE 1 -->
  <?php
    // echo 'Nous sommes le '.$date = date('d/m/Y');
   ?>

<!-- EXERCICE 2 -->
  <?php
    // echo 'Nous sommes le '.$date = date('d-m-Y');
   ?>

<!-- EXERCICE 3 -->
  <?php
    // echo 'La date du jour est: ';
    // setlocale(LC_ALL,'fr_FR.utf8','fra');
    // echo strftime("%A %d %B %Y", time());
   ?>

<!-- EXERCICE 4 -->
  <?php
    // echo 'Timestamp du jour: '.time().'<br>';
    // echo 'Timestamp du mardi 2 août 2016: '.mktime(15, 0, 0, 8, 2, 2016);
   ?>

<!-- EXERCICE 5 -->
  <?php
    // $date1 = date('d/m/Y'); //date du jour
    // $date2 = "16-05-2016"; // date fr le 16 mai 2016
    //
    // $date1 = str_replace("/","-",$date1);
    // $date2 = str_replace("/","-",$date2);
    // // On transforme les 2 dates en timestamp
    //
    // $date3 = strtotime($date1);
    // $date4 = strtotime($date2);
    //
    // // On récupère la différence de timestamp entre les 2 précédents
    // $nbJoursTimestamp = $date4 - $date3;

    // ** Pour convertir le timestamp (exprimé en secondes) en jours **
    // On sait que 1 heure = 60 secondes * 60 minutes et que 1 jour = 24 heures donc :
    // $nbJours = $nbJoursTimestamp/86400; // 86 400 = 60*60*24

    // echo "Nombre de jours : ".$nbJours;// dans mon exemple : Nombre de jours : 153
  ?>

<!-- EXERCICE 6 -->
  <?php
    // echo 'En Février 2016, il y avait '.$num = cal_days_in_month(CAL_GREGORIAN, 2, 2016).' jours';
   ?>

<!-- EXERCICE 7 -->
  <?php
    // $date = date('13-02-2016'); // inscrire la date du jour
    // echo date('d/m/Y', strtotime($date.' + 20 DAY'));
   ?>

<!-- EXERCICE 8 -->
  <?php
    // $date = date('13-02-2016'); // inscrire la date du jour
    // echo date('d/m/Y', strtotime($date.' - 22 DAY'));
   ?>

</body>
</html>
