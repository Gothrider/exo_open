<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8" />
		<title>Formulaire</title>
	</head>

	<body>
		<p> Bonjour, vous êtes sur la page formualaire</p>

		<p>Veuillez entrer vos informations de connections</p>

		<form method="post" action="mdp.php">
		<p>
		<label for="pseudo">Votre pseudo :</label>
		<input type="text" name="pseudo" />
		<br />
		<br />
		<label for="pass">Password :</label>
		<input type="password" name="pass" />
		<br/>
		<br />
		<input type="submit" value="Log In" />
		</p>
		</form>
	</body>
</html>
