<?php
session_start();
//Connexion to Database
$bdd = new PDO('mysql:host=localhost;dbname=admin_space;charset=UTF8;"', 'root','root');
if(!$_SESSION['password']){
    header('Location: connexion.php');
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Liste des membres</title>
</head>
<body>
    <!--Afficher tous les membres-->
    <?php
    $recupUsers = $bdd->query("SELECT * FROM membres");
    while($user=$recupUsers->fetch()){
        //Do echo on HTML balises. <?=....>? 
        ?>
        <p><?=$user['identifiant'];?></p>
        <?php
    };

    ?>


    <!--Fin tous les membres-->
    
</body>
</html>