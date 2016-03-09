<!DOCTYPE html lang="fr">
<html>
	<?php require_once('../head.php'); ?>
<body id="login_page">
	<?php 
		/*session_start();
		include("connex.php");
		if ($_SESSION['loggedin'] == 1){
		header('Location:back-end.php');
		}
		else{
		if (isset($_POST['name_user'],$_POST['pass_user']))
		{
			if (isset($_SESSION['nb'])) {
				$_SESSION ['nb']+=1; }
			else {$_SESSION['nb'] = 0 ;}
					$name_user=$_POST['name_user'];
					$pass_user=$_POST['pass_user'];
					$sql="SELECT * FROM domcv_user WHERE user='$name_user' AND pass='$pass_user'";
					$resultat = $bdd->query($sql);
					$res = $resultat->fetch(PDO::FETCH_OBJ);
					}
				else {$res=false ;}
				if ($res) { 
					header('Location:back-end.php');
					$_SESSION['loggedin'] = 1;
					
				}
				else { 
						$_SESSION['loggedin'] = 0;
						if ($_SESSION['nb'] < 20) {*/
							include ('form.php');
						/*}
						else { echo "<section id='login'><div class='form'><h3>Trop de tentatives <br><br> Veuillez Ressayer dans 3 Jours</h3><br></div></section>";}	
					}
		}
		*/
	?>


</body>
</html>