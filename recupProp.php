<?php 

include("connexion.php");



	

	



	$query = $dbh->prepare("SELECT G.NomGroupe, P.ContenuProp, P.NumProp FROM proposition AS P LEFT JOIN groupe AS G ON  G.NumGroupe = P.NumGroupe order by P.NumGroupe,P.NumProp");
	$query->execute();
	$result = $query->fetchAll();
	for($i = 0, $i<6, $i++){
		print_r($result[$i][NomGroupe]);
		echo "<br/>"
		for($k = 0, $i<6, $k++){
			
			print_r($result[$i*6+$k][ContenuProp])

		echo '
			<table>
				<tr>
					<td>
						' . $result[$i*6+$k][ContenuProp] . '
					<td/>
					<td>
					<form id="form-insert" method="post" action="modifProp.php">
				        <input type="hidden" name="var1" value="' .  $result[$i*6+$k][NumProp] . ' "></input>
				        <button type="submit">Modifier</button>
				    </form>
				    <td/>      

			    <tr/>
				
			</table>
			</br>'


		}
	}


	/*print_r($result[0][NomGroupe]);
	echo'<br/>';
	echo '
	<table>
		<tr>
			<td>
				' . $result[0][ContenuProp] . '
			<td/>
			<td>
			<form id="form-insert" method="post" action="modifProp.php">
		        <input type="hidden" name="var1" value="' . $result[0][NumProp] . ' "></input>
		        <button type="submit">Modifier</button>
		    </form>
		    <td/>      

	    <tr/>
		
	</table>'
	</br>;*/
	//print_r($dbh->errorInfo()); 