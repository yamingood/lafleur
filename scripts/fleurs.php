<?php 

    include('header.php');
    
?>

<!--CONTENU PAGE-->
<div class="container" id="content">
            <div class="row">
                <br>
                <br>
            </div>
        </div>
        <div class="container" id="content">
            <div class="row">
                <div class="col-md-2">

                </div>
                <div class="col-md-8">
                    <h2>Quelle fleur est faites pour vous ?</h2>
                    <p>Choisissez parmi notre large catalogue de fleurs
                        et compositions, vous trouverez forcément la fleur qu'il
                        vous faut.
                    </p>
                    <br>
                </div>
                <div class="col-md-2">

                </div>
            </div>
        </div>
        <!--CREATION TABLEAU À 4 COLONNES-->
        <?php 
            $cat = $db->query("SELECT idCategorie FROM produit");
            $requete = $db->query("SELECT * FROM produit where idCategorie='$_GET[cat]'"); 
            
        ?>
        <div class="container" id="content">
            <div class="row">
                <div class="col-md-2">
                <nav>
                    <button class="categ"><a href="fleurs.php?cat=ros">Fleurs</a></button>
                    <button class="categ"><a href="fleurs.php?cat=bul">Compositions</a></button>
                    <button class="categ"><a href="fleurs.php?cat=mas">Plantes</a></button>
                </nav>
                    
                
                </div>
                <div class="col-md-8">
                    <h4>~Nos fleurs et compositions~</h4>
                    <br>
                    <br>
                    <table class="table align-middle">
                        <thead>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">Références</th>
                                <th scope="col">Désignations</th>
                                <th scope="col">Prix</th>
                                <th scope="col">Photos</th>
                            </tr>
                        </thead>
                        
                        
                        <tbody>
                            <!--<caption>Nos compositions</caption>-->
                            <?php

                            //mise en place de la boucle d'affichage des produits
                                $resultat = $db->query('SELECT * FROM produit');
                                while($col=$resultat->fetch()){
                            ?>
                          
                                <tr>
                                    <td scope="row">
                                        <input type="checkbox" id="<?php echo($col['id']); ?> t_check" onclick="addPanier()" value="<?php echo($col['id']); ?>">
                                    </td>
                                     
                                    <td scope="row" id="tab_fleur">
                                    <?php
                                        //affichage de l'id de la fleur  
                                         echo($col['id']);
                                            
                                        ?>
                                        </td>
                                    <td>
                                        <?php
                                           //affichage du libelle de la fleur
                                                echo($col['description']);
                                            
                                        ?>
                                    </td>
                                    <td>
                                    <?php
                                       //affichage prix
                                            echo($col['prix'])."€";
                                        

                                            
                                            
                                        ?>

                                    </td>
                                    <td><img src=<?php
                                                //affichage des images
                                       
                                            echo($col['image']);
                                        

                                        
                                    ?> alt="aniwa" id="img_tab">

                                </td>
                                </tr>
                       <?php
                       //accolade de fin de boucle
                                }
                                ?>
                            
                        </tbody>
                    </table>
                    
                </div>
                <div class="col-md-2">

                </div>
            </div>
            
            
        </div>
        <!--FIN DE BOUCLE-->
        <style>
            .divButton{
                visibility: visible;
                transition: 0.3s;
                opacity: 1;
            }
            
            .floating-btn{
                box-shadow: 2px 2px 3px #999;
                position: fixed;
                right: 500px;
                bottom: 20px;
                cursor: pointer;
                
            }
            .floating-btn:active{
                background: #007D63;
            }
        </style>

        <div class="container" id="content">
            <div class="divButton">
                <button type="button" class="btn btn-primary btn-lg floating-btn" id="button_add" onclick="ajaxFun()">Ajouter au panier</button>
            </div>
        
        </div>
       
    </div>
   
    <script>

        function addPanier(){
            /*var button = document.querySelector('.divButton');
            action.classList.toggle('active');*/
            /*var button_add = document.getElementsById('.button_add');
            if (document.getElementsById("t_check").clicked === true) {

                var button = document.getElementById('.divButton');
                action.classList.toggle('active');
            }else{
                var button = document.getElementById('.divButton');
                action.classList.toggle('disabled');
            }*/
            var element = document.getElementsById("t_check");
            for (var i=0; i < element.length; i++){
                if (element[i].checked){
                    var fleurs = element[i].value;
                    break;
                }
            }
        }
        

</script>
</body>
</html>
<?php
include("footer.php");
?>