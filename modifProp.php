<?php 

include("connexion.php");



	

	



	$query = $dbh->prepare("SELECT ContenuProp FROM proposition WHERE NumProp = :value");
	$query->bindValue(":value", $_POST['var1']);
	$query->execute();
	$result = $query->fetchAll();

	echo'
	<form id="form-insert" method="post" action="writeProp.php">
		        <input type="hidden" name="var1" value="' . $_POST['var1'] . ' "></input>
		        <TEXTAREA name="proposition" rows=4 cols=40>' . $result[0][ContenuProp] . '</TEXTAREA>
		        <button type="submit">Modifier</button>
	</form>';
	
	//print_r($dbh->errorInfo()); 