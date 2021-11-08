<?php 


try{
	$access = new PDO("mysql:host=localhost;dbname=monoshop;port=3308", "root", "root");
	$access->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(Exception $e){
	echo 'IMPOSSIBLE DE TRAITER LES DONNEES. ERREUR : ' .$e->getMessage();
}
	


?>