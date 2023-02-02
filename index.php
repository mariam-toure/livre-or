<?php session_start() ?>


<!DOCTYPE html>
<html lang="fr">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="x-UA-comptable" content="IE=edge">
      <meta name="viemport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="index.css">
         <title>Index</title>
         
  </head>

  <body>
    

    <?php include "header.php"; ?>
   
    <img src="1024.jpg" alt="">

    <?php if (isset($_SESSION['id'])) : ?>
      <h1 class="salut">Bonjour <?= $_SESSION['prenom'] . " " . $_SESSION['nom'] ?> </h1>

    <?php else : ?>
      
      <h1>Bienvenue à Livre d'or</h1>
    <?php endif; ?>

   
  </body>
</html>  