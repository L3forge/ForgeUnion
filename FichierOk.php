<!DOCTYPE html>
<html>
<head>
	<title>Ajouter un USER</title>
</head>
<body>
	<form  action="controlajoute.php?val=1" autocomplete="on" name="formajout" method="POST"> 
        <h1>Ajouter un User</h1> 
        <p>
		ID :
			<input type="text" name="id" size="5">
		</p>
		<p>
		Prénom :
			<input type="text" name="prenom" size="25">
		</p>
		<p>
		Login :
			<input type="text" name="login" size="25">
		</p>
		<p>
		Password :
			<input type="text" name="pwd" size="12">
		</p>
		<p>
		Âge :
			<input type="text" name="age" size="5">
		</p>
		<p>
		Statut :
			<input type="text" name="statut" size="5">
		</p>
		<button type="submit" name="ajou"><em>Ajouter</em></button>
	</form>
</body>
</html>

<?php

?>