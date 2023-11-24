<?php

$loginForm = "<form method='post'>
        <div class='form-group'>
            <input type='text' placeholder='username' name='username' id='' class='form-control'>
        </div>
        <div class='form-group'>
            <input type='password' placeholder='password' name='password' id='' class='form-control mt-3'>
        </div>
        <div class='form-group'>
            <button type='submit' class='btn btn-success mt-3'>log in</button>
        </div>
    </form>";



function afficheUnPlat(array $plats)
{
    $platsDansUnTemplate = "<div class='row'>";

    foreach ($plats as $plat) {
        $platsDansUnTemplate .= "
        <div class='col-md-3 mt-5'>
            <div class='card' style='width: 18rem; height: 30rem;'>
                <img src=".$plat['image']." class='card-img-top mb-3' alt='...'>
                <div class='card-body'>
                    <h1 class='card-title'>".$plat['nom']."</h1>
                    <h5 class='card-text'>".$plat['cuisson']."</h5>
                    <h5 class='card-text'>".$plat['accompagnement']."</h5>
                    <h5 class='card-text'>".$plat['cuisson']."</h5>
                    <h5 class='card-text'>".$plat['sauce']."</h5>        
                    <form method='post' action=''>
                        <button type='submit' class='btn btn-warning' name='pouletId' value='$plat[id]'>Page produit</button>
                    </form>
                </div>
            </div>
        </div>
    ";
    }

    $platsDansUnTemplate .= "</div>";

    return $platsDansUnTemplate;
}


function affichePageProduit(array $plats, $idPoulet){
    $presentation = "<div class='d-flex justify-content-center'>";

    foreach($plats as $plat){
        if ($plat['id'] == $idPoulet){
            $platDansUnTemplate = "
                <div class='card mx-2' style='width: 18rem;'>
                    <img src='$plat[image]' class='card-img-top img' alt='#'>
                    <div class='card-body'>
                        <h5 class='card-title'>$plat[nom]</h5>
                        <p class='card-text'>Type : $plat[type]</p>
                        <p class='card-text'>Cuisson : $plat[cuisson]</p>
                        <p class='card-text'>Accompagnement : $plat[accompagnement]</p>
                        <p class='card-text'>Sauce : $plat[sauce]</p>
                    </div>
                </div>
            ";
            $presentation .= $platDansUnTemplate;
        }
    }

    $presentation .= "</div>";

    return $presentation;
}
