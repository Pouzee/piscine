<?php 

include("connexion.php");

if( (!empty($_POST['NomPromo'])) && (!empty($_POST['Annee'])) && (!empty($_POST['CodePromo']))){

	
	echo $_POST['NomPromo'];
	



	$query = $dbh->prepare("INSERT INTO promotion(NumPromo,NomPromo, AnneePromo, CodePromo) VALUES (NULL,:Nompromo, :Annee, :CodePromo)");
	$query->bindValue(":Nompromo", $_POST['NomPromo']);
	$query->bindValue(":Annee", $_POST['Annee']);
	$query->bindValue(":CodePromo", $_POST['CodePromo']);
	$query->execute();

	//print_r($dbh->errorInfo()); 
}


