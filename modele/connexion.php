<?php //se protéger des erreurs de connexion à la base de données

try {
	$bdd = new PDO('mysql:host=localhost;dbname=mysql_atelier', 'root', 'root');
}
catch (PDOException $e){
	echo "Echec de connexion: " . $e->getMessage();
}