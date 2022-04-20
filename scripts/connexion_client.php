<?php
session_start(); 
	
	 ?>
	 
<div class="container" id="content">
<div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-6" id="tab_connect">
	


<div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-pills card-header-pills">
      <li class="nav-item">
        <a class="nav-link active" href="#">Connexion</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="inscription_client.php">Inscription</a>
      </li>
    </ul>
  </div>
  <div class="card-body">
    <h2 class="card-title">Connexion</h2>
    <p class="card-text">
	<table class="center" >
		<tr>
	      <td class="content"><form action="connect_client.php" method="post">
	 <br>
     <!--<h2 class="inscript" style="text-align:center;">Connexion</h2>-->
		  <table class="table align-middle" id="tab_connect">
			  <tbody>
			  		<tr>
					  <th scope="row">Identifiant: </th>
					  <td><input type="text" name="identifiant" value="" /></td>
					</tr>
					<tr>
						<th scope="row">Mot de Passe:</th>
						<td><input type="password" name="mot_de_passe" value="" /></td>
					</tr>
					<tr><td></td><td><input type="submit" name="connexion" value="connexion" /></td></tr>
			  </tbody>
		  </table>
</form>
	</p>
  </div>
</div>
<?php
include("connect_db.php");
	if (isset($_POST['connexion'])) {
		$identifiant = $_POST['identifiant'];
		$mot_de_passe = $_POST['mot_de_passe'];

			$query = $db->prepare($sql = "SELECT * FROM client WHERE email='".$identifiant."' and mot_de_passe='".$mot_de_passe."'");
			$query->execute();

				$_SESSION['identifiant'] = $identifiant;
				header("Location: header.php");
									}	
	else{
	  	echo "Le nom d'utilisateur ou le mot de passe est incorrect.";
		}
include("deconnect_db.php");

?>


	   </tr>
	</table>
	</div>
	<div class="col-md-3"></div>
</div>

	<a href="inscription_client.php">Vous n'avez pas de compte ?</a>
	</div>
</div>