<?php
require_once 'index.php';
require_once 'templates.php';
$isLoggedIn = false;
$bouttonCliqué = false;

$username = "michel";
$password = "azerty";

$idPoulet = '';
$pageProduit = false;

$usernameUtilisateur = "";
$motDePasseUtilisateur = "";


// logique de connection  $_POST etc etc

if(isset($_POST['username'])){
    $usernameUtilisateur = $_POST['username'];

    if( $usernameUtilisateur == $username)
    {

        if(isset($_POST['password']))
        {
            $motDePasseUtilisateur = $_POST['password'];

            if($motDePasseUtilisateur == $password){
                $isLoggedIn = true;
            }
        }

    }else{
        $content = "déso, toi je te connais pas";
    }
}

if (isset($_POST['pouletId'])){
    $pageProduit = true;
    $idPoulet = $_POST['pouletId'];
}




//a la fin ,si la connection est acceptée,
//mettre isLoggedIn en true