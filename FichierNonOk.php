<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /> 
<!-- Titre --> 
<title>ADMIN </title> 
<!-- CSS --> 
<link rel="stylesheet" media="screen" type="text/css" title="design" href="../design.css" /> 
</head> 
 
<body> 
<!-- back sert Ã  dÃ©finir les images de fond --> 
<img id="back" src="../images/back_site.jpg" alt=""> 
<div id="back"> 
 
 
<!-- Corps est l'Ã©quivalent de mon Body --> 
<div id="corps"> 
 
 
	<div id="menu"> 


<p> 
<a href="index.php?admin_c=post_edit">BLOG_POSTS</a> 
<a href="index.php?admin_c=blog">LISTE</a> 
<a href="index.php?admin_c=hdri">LIENS</a> 
<a href="index.php?admin_c=resume">CV</a> 
<a href="index.php?admin_c=links">SHOWREEL</a> 
<a href="../index.php">RETOUR</a> 
</p> 
	</div> <!-- fermeture menu --> 
	<div id="contenu"> 
    
        Tu ne m'as pas donnÃ© de requete.
	</div> 
</div> 
</div> 

</body> 
</html>
<?php
try
{
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=XXXXXX.1and1.fr;dbname=XXXXXXXXX', 'XXXXXXXXX', 'XXXXXXXXX', $pdo_options);
    //Si on est en mode modif, on modifie le post:
	if ( $_GET['action'] == 'modif' AND isset($_GET['id']))
		{
			$req = $bdd->prepare('UPDATE blog SET titre = :titre, titre_en = :titre_en, contenu = :contenu, contenu_en = :contenu_en, categorie = :categorie WHERE id = :id');
			$req->execute(array(
			'titre' => $_POST['titre'],
			'titre_en' => $_POST['titre_en'],
			'contenu' => $_POST['contenu'],
			'contenu_en' => $_POST['contenu_en'],
			'categorie' => $_POST['categorie'],
			'id' => $_GET['id'],
			));
			echo $_GET['id'] . ' à été modifié' ;
		}
	elseif ( $_GET['action'] == 'delete' AND isset($_GET['id']))
		{
			$req = $bdd->prepare('DELETE FROM blog  WHERE id = :id');
			$req->execute(array(
			'id' => $_GET['id']
			));
			echo $_GET['id'] . ' à été supprimé' ;
		}
	
	elseif  ( $_GET['action'] == 'add')
		{
    	//Si on est en mode post, on ajoute une entrée dans la table blog
    	$req = $bdd->prepare('INSERT INTO blog(date_post, titre, titre_en, contenu, contenu_en, categorie) VALUES(NOW(), :titre, :titre_en, :contenu, :contenu_en, :categorie)');
		$req->execute(array(
		'titre' => $_POST['titre'],
		'titre_en' => $_POST['titre_en'],
		'contenu' => $_POST['contenu'],
		'contenu_en' => $_POST['contenu_en'],
		'categorie' => $_POST['categorie']
		));
		echo 'Le post a bien été ajouté !';
		}
    else
		{
			echo "Tu ne m'as pas donné de requete.";
		}
    
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}
?>

<?php session_start(); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<!-- Titre -->
<title>ADMIN </title>
<!-- CSS -->
<link rel="stylesheet" media="screen" type="text/css" title="design" href="../design.css" />
</head>

<body>
<!-- back sert Ã  dÃ©finir les images de fond -->
<img id="back" src="../images/back_site.jpg" alt=""> 
<div id="back">


<!-- Corps est l'Ã©quivalent de mon Body -->
<div id="corps">

	<div id="menu">
		<?php include("menu.php"); ?>
	</div> <!-- fermeture header+menu -->
	<div id="contenu">
    
        <?php
		if (isset($_GET['admin_c']))  // On a demandé une catégorie
		{
			include ($_GET['admin_c'] . ".php");
		}
		else
		{
			include ("add_post.php");
		}
		?>

	</div>
</div>
</div>



</body>
</html>
