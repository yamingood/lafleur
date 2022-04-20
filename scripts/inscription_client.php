<?php
session_start(); 
//formulaire d'inscription php
	include("header.php"); ?>
<div class="container" id="content">
<br>

<h2>Formulaire d'inscription</h2>
<br>
<div class="row">
	<div class="col-md-2">
	</div>

	<div class="col-md-8">
	<!--<div class="mb-2">
	<label for="identifiant" class="form-label">Identifiant (email) :</label>
	<input type="email" class="form-control" name="identifiant" value="" required placeholder="name@example.com"/>
	</div>

	<div class="mb-2">
	<label for="password" class="form-label">Mot de Passe :</label>
	<input type="password" class="form-control" name="mot_de_passe" value="" required placeholder="Mot de Passe "/>
	</div>

	<div class="mb-2">
	<label for="identifiant" class="form-label">Nom :</label>
	<input type="text" class="form-control" name="nom" value="" required />
	</div>

	<div class="mb-2">
	<label for="identifiant" class="form-label">Prenom :</label>
	<input type="text" class="form-control" name="prenom" value="" required />
	</div>

	<div class="mb-3">
	<label for="identifiant" class="form-label">Rue :</label>
	<input type="text" class="form-control" name="rue" value="" required />
	</div>

	<div class="mb-3">
	<label for="identifiant" class="form-label">Ville :</label>
	<input type="text" class="form-control" name="ville" value="" required />
	</div>

	<div class="mb-3">
	<label for="identifiant" class="form-label">Code Postal :</label>
	<input type="text" class="form-control" name="cp" value="" required />
	</div>

	<div class="mb-3">
	<label for="identifiant" class="form-label">Téléphone :</label>
	<input type="tel" class="form-control" name="tel" value="" required />
	</div>

	<div class="mb-3">
	<label for="identifiant" class="form-label">Mobile :</label>
	<input type="tel" class="form-control" name="mob" value="" required />
	</div>

	<input type="submit" name="Inscription" value="valider" />
	<input type="submit" name="reset" value="annuler" />
	</div>-->

	
	
<div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-pills card-header-pills">
      <li class="nav-item">
        <a class="nav-link" href="connexion.php">Connexion</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="inscription_client.php">Inscription</a>
      </li>
    </ul>
  </div>
  <div class="card-body">
    <h2 class="card-title">Inscription</h2>
    <p class="card-text">
	<table class="table align-middle">
		<tbody>
		<tr>
	      <td class="content"><form action="envoi.php" method="post">
     		
		  <table class="table align-middle" id="tab_connect">
			<tr><th scope="row"> Identifiant(email): </th>
			<td><input type="text" name="identifiant" value="" required /></td></tr>

			<tr><th scope="row"> Mot de Passe: </th>
			<td><input type="password" name="mot_de_passe" value="" required /></td></tr>

			<tr><th scope="row"> Nom: </th>
			<td><input type="text" name="nom" value="" required /></td></tr>

			<tr><th scope="row"> Prenom: </th>
			<td><input type="text" name="prenom" value="" required /></td></tr>

			<tr><th scope="row"> Rue: </th>
			<td><input type="text" name="rue" value="" required /></td></tr>

			<tr><th scope="row"> Ville: </th>
			<td><input type="text" name="ville" value="" required /></td></tr>

			<tr><th scope="row"> Code Postal: </th>
			<td><input type="text" name="cp" value="" required /></td></tr>

			<tr><th scope="row"> Téléphone: </th>
			<td><input type="text" name="tel" value="" required /></td></tr>

			<tr><th scope="row"> Mobile: </th>
			<td><input type="text" name="mob" value="" required /></td></tr>
			
			<tr><td></td><td><input type="submit" name="Inscription" value="valider" /></td></tr>
			<tr><td></td><td><input type="submit" name="reset" value="annuler" /></td></tr>
		</tbody>
		
		  </table>
	</p>
  </div>
</div>
<div class="col-md-2"></div>
</div>


	
</form>
        <?php
        if (isset ($_POST['Inscription'])){
            //récupération des données client
            $identifiant=$_POST['identifiant'];
            $mot_de_passe=$_POST['mot_de_passe'];
            $nom=$_POST['nom'];
			$prenom=$_POST['prenom'];
            $rue=$_POST['rue'];
            $ville=$_POST['ville'];
			$cp=$_POST['cp'];
            $tel=$_POST['tel'];
            $mob=$_POST['mob'];
            //connexion à la base de donnée
            include("connect_db.php");
            //script sql d'insertion
			echo "yooo le rap";
            $sql = "INSERT INTO client VALUES ('".$identifiant."','".$nom."','".$prenom."','".$rue."','".$ville."','".$cp."','".$tel."','".$mob."','".$mot_de_passe."')";
            $statement = $db->query($sql); 
				echo "Votre compte a été crée avec succes.";
            //déconnexion à la base de donnée
            include("deconnect_db.php");
        }
        ?>
	   </tr>
	</table>
</div>