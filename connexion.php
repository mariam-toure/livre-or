<?php

session_start();

try {
   
   $conn = mysqli_connect("localhost","root","", "Livreor");

} catch (Exception $e) {
   echo $e->getMessage();
}
// var_dump($conn);
$message = "test";

if (isset($_GET['deco'])) {
   session_unset();
   header('Location: index.php');
   die();
}
 
if (isset($_POST['login']) && isset($_POST['password'])) {
   $login = htmlspecialchars($_POST['login']);
   $password = htmlspecialchars($_POST['password']);

   $res = mysqli_query($conn, "SELECT * FROM `utilisateurs` WHERE login = '$login' AND password = '$password'");
   $user = $res->fetch_assoc();

   // var_dump($user);
   // var_dump($res);

   if (mysqli_num_rows($res)) {
      echo "connexion reussit!";

      $_SESSION['id'] = $user['id'];
      $_SESSION['login'] = $user['login'];
      $_SESSION['prenom'] = $user['prenom'];
      $_SESSION['nom'] = $user['nom'];
      header('Location: index.php');

   } else {
      echo "l'utilisateur n'exist pas!!!";
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
      <title>Connexion</title>
      
         
  </head>

  <body>
  
  <main>
  <?php include "header.php";?>
     <h1>Connexion</h1>
     <p class="erreurs"><?=$message?></p>

  <div class="container">
        <form method="post" class="myform"><br>           
            <label name="login">Login</label><br>
               <input type="text" name="login"><br>
               <br>
            <label name="password1">Password</label><br>
               <input type="passeword" name="password"><br>  
               <br>                 
             <input type="submit" name="submit" value="Se connecter">
            
        </form>
  </div>
 </main> 
</body>
</html>