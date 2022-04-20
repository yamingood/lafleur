<?php
//connexion à la BDD
    $db = new PDO('mysql:host=localhost;dbname=lafleur','Lafleur', 'fleuriste');
    //requête qui fixe l'encodage de la connexion au serveur à utf-8 pour le reste du script
    $db->exec("SET CHARACTER SET utf8");
?>