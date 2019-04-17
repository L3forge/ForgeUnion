<?php
	$log = "kaarzdgb_bdd";
	$pass = "10051970nB";
	try {
//ouverture bd
	$db = new PDO('mysql:host=localhost;dbname=kaarzdgb_tpphp', $log, $pass);
	}
	catch (PDOException $e) {
		print "Erreur !: " . $e->getMessage() . "<br/>";
    die()
	}
	$sql ='SELECT id,prenom,login,statut,age FROM Acces';
	$requesttest = $db->query($sql);
  
	while ($d = $req->fetch()) 
	
		echo '<b>'.$d['prenom'].' '.$d['login'].'</b> ('.$d['statut'].')';
		echo ' <i>age : '.$d['age'].'</i> '.' <b><a href="efface.php?id='.$d['id'].'" ><img src="croix.png"></a></b>'.' <b><a href="ajoute.php?id='.$d['id'].'" ><img src="ajoute.png"></b></a><br><br>';
	}
		

    if (isset($_GET["msg"]) && $_GET["msg"] == "accept") {
		echo 'Suppression Réussi';
	}
	if (isset($_GET["msg"]) && $_GET["msg"] == "echouer") {
		echo 'Erreur de suppression';
	}
	if (isset($_GET["msg"]) && $_GET["msg"] == "ajout") {
		echo 'Ajout ok';
	

// Fermeture bd
$db = null;
