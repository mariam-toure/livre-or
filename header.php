
<!DOCTYPE html>
<html lang="fr">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="x-UA-comptable" content="IE=edge">
      <meta name="viemport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="header.css">
      <title>Index</title>

  </head>

  <body>


  <header>
    
      
    <?php if (isset($_SESSION['id'])) : ?>
  
    <ul>
        
      <li><a href="index.php">Accueil</a></li>
      <li><a href="profil.php">Profil</a></li>
      <li><a href="livre-or.php">Livreor</a></li>
      <li><a href="commentaire.php">Commentaire</a></li>
      <li><a href="connexion.php?deco">Se deconnecter</a></li>
  
    </ul>
  
    <?php else : ?>
  
    <!--<nav class="head-menu"-->
    <ul>
        
    <li><a href="index.php">Accueil</a></li>
    <li><a href="inscription.php">Inscription</a></li>
    <li><a href="connexion.php">Se connecter</a></li>
  
    </ul>
  
    <?php endif; ?>
  
    </header>
  
  
  </body>
</html>  