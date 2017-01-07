<?php 

include("connexion.php");



	

	



	$query = $dbh->prepare("UPDATE proposition SET ContenuProp ='" . $_POST['proposition'] . "' WHERE NumProp = :value");
	$query->bindValue(":value", $_POST['var1']);
	//$query->bindValue(":text", $_POST['proposition']);
	$query->execute();
	$result = $query->fetchAll();

	echo'ok';
	
	
	//print_r($dbh->errorInfo()); 