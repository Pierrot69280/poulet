<?php
require_once 'poulet.php';
require_once "templates.php";
require_once "authentification.php";



if(!$isLoggedIn){
    $content = $loginForm;
}else{

    require_once "poulet.php";

    $content = afficheUnPlat($platsPoulet);
}

if ($pageProduit == true){
    $content = affichePageProduit($platsPoulet, $idPoulet);

}








