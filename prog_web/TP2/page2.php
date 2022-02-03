<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Questionnaire</title>
  <style>
    td{
      border-top:1px solid black;
      padding-top:5px;
    }
  </style>
</head>
<body>
	<form action=page3.php method='GET'>
		<br>Je suis prêt à suivre le TD avec un prof qui parle anglais: 0%
		<input type="radio" name="nom_variable" value="niveau anglais très bas">
		<input type="radio" name="nom_variable" value="niveau anglais bas">
		<input type="radio" name="nom_variable" value="niveau anglais moyen">
		<input type="radio" name="nom_variable" value="niveau anglaisassez bien">
		<input type="radio" name="nom_variable" value="niveau anglais bien">
		<input type="radio" name="nom_variable" value="niveau anglais bilingue"> 100%
		</br>
		<br>J'ai déjà fait du HTML+CSS (en enseignement ou tout seul) <input type="checkbox" name="nom_variable" value="niveau anglais"></br>
		<br>J'ai déjà fait du PHP (en enseignement ou tout seul) <input type="checkbox" name="nom_variable" value="niveau anglais"></br>
		<br>J'ai déjà fait du javascript (en enseignement ou tout seul) <input type="checkbox" name="nom_variable" value="niveau anglais"></br>
		<br>Je viens de (IUT orsay, L2orsay,IUT lyon, etc.) <input type="text" name="nom_variable"></br>
		<br>Je voudrais rajouter que ...:</br>
		<textarea cols="50" rows="5"></textarea><br></br>
	<?php
	$jsonString = file_get_contents('MIAGE.json');
 	$data = json_decode($jsonString, true);
 	echo "<br>Choisissez votre binome envisagé :<select size='1'>";
	foreach($data as $i => $etu){
    $name = strtoupper($data[$i]['lastname']);
    $firstname = $data[$i]['firstname'];
    $email = $data[$i]['email'];
	echo "<option>$firstname $name</option>";
	}
	echo "</select></br>";
	$nom = $_GET["nom"];
	$prenom = $_GET["prenom"];
	echo "$prenom $nom merci de remplir le questionnaire <input type='submit' action='page3.php'>" ;
	
	?>
	</form>
</body>
</html>