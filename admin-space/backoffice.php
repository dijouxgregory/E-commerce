<?php
session_start();
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
    <title>Backoffice</title>
</head>
<body>

<a href="members.php">liste des utilisateurs</a>
    
</body>
</html>