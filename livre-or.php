
<?php
session_start();

try {
   
   $conn = mysqli_connect("localhost","root","", "Livreor");

} catch (Exception $e) {
   echo $e->getMessage();
}
// var_dump($conn);
$message = "test";



$sql = "
SELECT `commentaire`, `login`, `date` FROM `commentaires`
INNER JOIN `utilisateurs`
ON commentaires.id_utilisateur = utilisateurs.id
ORDER BY `date` DESC";

// Récupération des commentaires
// $req = $bdd->prepare($sql);
// $req->execute();
// $commentaires = $req->fetchAll(PDO::FETCH_ASSOC);


$result = mysqli_query($conn, $sql);
$commentaires = mysqli_fetch_all($result, MYSQLI_ASSOC);

// var_dump($commentaires);

//mysqli_close($connexion); // fermer la connexion


?>

<!DOCTYPE html>
<html lang="fr">
<style>
     table, th, td {
     border: 1px solid black;
     border-collapse: collapse;
     padding: 20px;
   }
  </style>
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="x-UA-comptable" content="IE=edge">
      <meta name="viemport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="index.css"> 
      <title>Livre-or</title>
      
        
  </head>

  <body>
      <?php include "header.php";?>

      <main>

           <h2>Commentaires:</h2>

           <table style="width:50%; height:50%;">
                <thead>
                    <tr>
                        <td>Poster le:</td>
                        <td>Par utilisateur:</td>
                        <td>Commentaires:</td>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($commentaires as $com) : ?>

                    <tr >

                        <td><?= $com['date'] ?></td>
                        <td><?= $com['login'] ?></td>
                        <td><?= $com['commentaire'] ?></td>
                    </tr>

                    <?php endforeach; ?>
                </tbody>
            </table>

      </main>
  </body>
</html>



