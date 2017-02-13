<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Secret</title>
</head>
<body>
  <?php
    if ($_POST['mdp'] == 'kangourou') {
      echo 'Vous avez trouvé le mot de passe';
    }
    else {
      echo 'Vous n\'avez pas trouvé le bon mot de passe, vous ne pouvez pas accéder à cette page.';
    }
   ?>

</body>
</html>
