<?php
//var_dump( $_SERVER );

$url         =  $_SERVER["REQUEST_URI"];
$contentFile = null;

switch( $url )
{
    case '/activites.php':
        $contentFile = 'activites.html';
        break;
    case '/couturieres.php':
        $contentFile = 'couturieres.html';
        break;
    case '/contact.php':
        $contentFile = 'contact.html';
        break;
    case '/histoire.php':
        $contentFile = 'histoire.html';
        break;
    case '/locations.php':
        $contentFile = 'locations.html';
        break;
    case '/tickets.php':
        $contentFile = 'tickets.html';
        break;
    case '/':
    default :
        $contentFile = 'index.html';
}

function insertContent( $file )
/*---------------------------*/
{
    $file = __DIR__ . "/content/{$file}";

    if ( is_file( $file ) )
    {
        include( $file );
    }
    else
    {
        var_dump( "{$file} NOT found!" );
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <!--lien font awesome (changer la police) -->
    	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!--lien boostrap-->
    	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    	<link rel="stylesheet" href="/css/base.css">
    	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    	<title>La fête Louis XI</title>
    </head>

    <style>
        /* Astérisque pour indiquer que la zone est obligatoire */
        label.required:after { content: " *"; color: #800; font-weight: bold; }

        /* Fond rose pour les zones obligatoires qui sont NON remplies ou incorrectement remplies (invalides) */
        input:required:invalid,
        textarea:required:invalid {background-color: pink; color: white; }
    </style>

    <body>
    	<!--barre de navigation-->
		<nav class="nv-navbar navbar navbar-expand-lg position-fixed-top w-100">
            <div class="container-fluid">
              	<!-- début barre de navigation-->
              	<img src="images/logo_louis.jpg" height="100">

              	<div class="navbar-dark">
                    <button class="nv-navbar navbar-toggler bg-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>

                <div class="collapse navbar-collapse justify-content-center" id="navbarToggleExternalContent">
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item pe-4"><a class="nav-link" href="/"><i class="bi bi-journal-richtext"></i> Historique à Genappe</a></li>
                        <li class="nav-item pe-4"><a class="nav-link" href="/histoire.php"><i class="bi bi-book-half"></i> Histoire</a></li>
                        <li class="nav-item pe-4"><a class="nav-link" href="/activites.php"><i class="bi bi-dice-2"></i> Activités</a></li>
                        <li class="nav-item pe-4"><a class="nav-link" href="/tickets.php"><i class="bi bi-ticket-detailed-fill"></i> Tickets</a></li>
                        <li class="nav-item pe-4"><a class="nav-link" href="/couturieres.php"><i class="bi bi-pencil"></i>Couturières</a></li>
                        <li class="nav-item pe-4"><a class="nav-link" href="/locations.php"><i class="bi bi-bag-fill"></i> Locations</a></li>
                        <li class="nav-item pe-4"><a class="nav-link active" aria-current="page" href="/contact.php"><i class="bi bi-headset"></i> Contact</a></li>
                    </ul>
                </div>

                <form class="d-flex">
                    <input class="form-control me-2" type="Recherche" placeholder="Recherche" aria-label="Recherche">
                    <button class="btn btn-outline-success" type="submit">Rechercher</button>
                </form>
            </div>
        </nav><!--fin barre de navigation-->

        <?php
            insertContent( $contentFile );
        ?>

        <footer>
        	<div class="contenu-footer">
        		<div class="bloc footer-contact">
        			<h3>Nous contacter via <i class="bi bi-telephone-fill"></i></h3>
        			<hr class="featurette-divider">
        			<ul class="liste-contact">
        				<li><a>Numéro : 0429 08 55 32</a></li>
        				<li>Email : <a href="mailto:sarah.hermans@cesjb.be">sarah.hermans@cesjb.be</a></li>
        				<li><a href="https://www.instagram.com/la_fete_louis_xi/"><i class="bi bi-instagram"></i></a></li>
        				<li><a href=""><i class="bi bi-facebook"></i></a></li>
        			</ul>
        		</div>

        		<div class="bloc footer-adresse">
        			<h3>Adresse du festival <i class="bi bi-geo-alt-fill"></i></h3>
        			<hr class="featurette-divider">
        			<ul class="liste-adresse">
        				<li><a>Parc de la Dyle,
        					Rue de Ways 115b Genappe</a></li>
        			</ul>
        		</div>

        		<div class="bloc footer-info">
        			<h3>Les autres informations <i class="bi bi-clipboard-data-fill"></i></h3>
        			<hr class="featurette-divider">
        			<ul class="liste-info">
        				<li><a href="/"                >Historique à Genappe</a></li>
        				<li><a href="histoire.php"     >Histoire</a></li>
        				<li><a href="activites.php"    >Activités</a></li>
        				<li><a href="tickets.php"      >Tickets</a></li>
        				<li><a href="couturieres.php"  >Couturières</a></li>
        				<li><a href="locations.php"    >Locations</a></li>
        				<li><a href="contact.php"      >Contact</a></li>
        			</ul>
        		</div>
        	</div>
        </footer>

		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script><!--code javascript a la fin pour le caroussel-->

	</body>
</html>