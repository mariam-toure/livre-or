<?php
session_start();
try {
   
   $conn = mysqli_connect("localhost","root","", "Livreor");

} catch (Exception $e) {
   echo $e->getMessage();
}
// var_dump($conn);
$message = "test";

if(isset($_POST['submit_commentaire'])) {
if(!empty($_POST['commentaire'])){
    $commentaire = htmlspecialchars($_POST['commentaire']);
    $idUser = $_SESSION['id'];
    date_default_timezone_set('Europe/Paris');
    $date = date('Y-m-d H:i:s');
    var_dump($commentaire);

    $insert_commentaire = "INSERT INTO `commentaires` (`commentaire`, `id_utilisateur`,`date`) VALUES ('$commentaire', 
    
    '$idUser', '$date')";
    $result = mysqli_query($conn, $insert_commentaire);

    echo "votre commentaire a été Envoyé";
} else {
  echo "votre commentaire n'a pas été Envoyé";
}
}
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="x-UA-comptable" content="IE=edge">
      <meta name="viemport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="index.css"> 
      <title>Commentaire</title>
      
        
  </head>

  <body>
      <?php include "header.php";?>

  <main>

    
        

        <br />

        <h1>Commentaires:</h1>
        <form method="POST" class="myform">
          
          <br>
          <textarea name="commentaire" placeholder="Votre commentaire..."></textarea><br:>
          
          <input type="submit" value="Poster mon commentaire" name="submit_commentaire"/>
        </form>
  </main>
  </body>
</html>


