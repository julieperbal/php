<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

  <?php
  $nombre = $_POST['num'];
  // $premier = ((($nombre/$nombre)==1)&&(($nombre/1)==$nombre));

  switch ($nombre) {
    case (($nombre/$nombre)==1):
      $verdict= $nombre.' est un nombre premier.';
      break;

    case (($nombre/1)==$nombre):
      $verdict = $nombre.' est un nombre premier.';
      break;

    case (($nombre/$nombre)==1):
      $verdict = $nombre ' n\'est pas un nombre premier';
      break;

    case (($nombre/1)==$nombre):
      $verdict = $nombre ' n\'est pas un nombre premier.';
      break;

    default:
      $verdict = $nombre 'est une exception!';
      break;
  }

    // function nombrepremier($nombre){
    //
    //   if (isset($_POST['valider'])) {
    //
    //     if ($nombre == $premier) {
    //       echo $nombre.' est un nombre premier.';
    //     }
    //     elseif ($nombre != $premier) {
    //       echo $nombre.' n\'est pas un nombre premier';
    //     }
    //     else {
    //       echo $nombre.' est une exeption!';
    //     }
    //   }
    // }
   ?>

</body>
</html>
