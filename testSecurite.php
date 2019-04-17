<?php //connexion a la base de donnees 
mysql_connect('localhost', 'root', ''); 
mysql_select_db('eng111'); 
//recuperation des parametres 
$nom = $_GET['nom']; 
$motdepasse = $_GET['motdepasse']; 
//generation de la requete 
$requeteSQL = "SELECT numerocarte FROM comptes WHERE nom = '$nom' AND motdepasse = PASSWORD( '$motdepasse' )"; 
//execution de la requete 
$reponse = mysql_query($requeteSQL); 
$resultat = mysql_fetch_assoc($reponse); 
//affichage du resultat 
echo $resultat['numerocarte']; 
?>
