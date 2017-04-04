<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<head>
	<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
	<meta http-equiv="content-language" content="fr" />
<!--<link href="../css/styly.css" rel="stylesheet" />   -->	
	<title>Gestion d'une equipe</title>
</head>

<body class="body">
	<main class="main">
	
	<h1>Gestion d'Equipe</h1>
	
	
	<form id="formulaire" action="Index.php" method="get">
		<fieldset>
			<legend> Ajout d'un Individu a la base : </legend>
			
				<label for="nom">nom du joueur : </label>
				<input	type="text" name="nom" id="nom" />
				
				<label for="prenom">prenom du joueur : </label>
				<input	type="text" name="prenom" id="prenom" />	
				
				<label for="age">age du joueur : </label>
				<input	type="text" name="age" id="age" />	
				
				<label for="shortDesc">Description courte du joueur : </label>
				<input	type="text" name="shortDesc" id="shortDesc" />		
				
					
		</fieldset>
		<p>
			<input id="envoyer" name="envoyer" type="submit" value="Supprimer"	title="" />
		</p>
	</form>
</body>
</html>