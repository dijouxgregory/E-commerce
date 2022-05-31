<?php
session_start();
if(isset($_POST['connexion'])){
    if(!empty($_POST['id']) AND !empty($_POST['password'])){
        $id = "admin";
        $password = "admin1234";
        $inputedId = htmlspecialchars($_POST['id']);
        $inputedPassword = htmlspecialchars($_POST['password']);
        if($inputedId ==$id AND $inputedPassword==$password){
            $_SESSION['password'] = $inputedId;
            header('Location: backoffice.php');

        }else{
            header('Location: connexion.php');
            echo 'Votre mot de passe ou votre pseudo est errone';
        }

    }else{
        echo 'Veuillez remplir tous les champs';
    }

}



?>