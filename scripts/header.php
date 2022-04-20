<?php
//connexion à la BDD
   include('connect_db.php');

?>
        <!DOCTYPE html>
        <html lang="fr">
           <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Accueil-Lafleur</title>
                <link rel="stylesheet" href="../css/style.css">
                <link rel="stylesheet" href="../css/bootstrap.css">
           
            </head>
            <body>
            <div class="container-fluid" id="bg">
            <!-- Création en-tête -->
            <div class="container" id="corps">
            <div class="row">
            <!-- AJOUT COLONNE AVEC IMAGE -->
            <div class="col-md-auto">
            <img src="../assets/logo_lafleur.png" alt="Logo_Lafleur">
            </div>
            <!-- AJOUT COLONNE AVEC MENU -->
            <div class="col-md-3">
               
            <ul id="menu">
            <b><li><a href="index.php" id="lien">Accueil</a></li></b>
            
            </ul>
            </div>
            <div class="col-md-3">
            <ul id="menu">
            
            <b><li class="deroulant"><a href="fleurs.php" id="lien">Notre catalogue de fleurs</a></li></b>
                
            </ul>
            </div>
            <div class="col-md-3">
            <ul id="menu">
            <b><li><a href="index.php" id="lien">Votre panier</a></li></b>
            </ul>
            </div>
            </div>
            
</div>
