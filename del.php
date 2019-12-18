<html>
  <head>
   <title>DB & PHP test: DELETE</title>
  </head>
  <body>
	<?php
		$connection = mysql_pconnect("localhost","root","");
		mysql_select_db("Disneyland",$connection);
		$query = "SELECT nome FROM Personaggi ORDER BY nome";
		$result = mysql_query($query,$connection);
		if (mysql_num_rows($result) != 0){
	?>
		<form action="delete.php" method="GET" ><br>
		Personaggio da eliminare<br>
		<select name="personaggio">
	<?php
		while ($row = mysql_fetch_array($result))
		echo "<option value=\"$row[0]\">$row[0]</option>";
	?>
		</select><br><br>
		<input type="submit" value="Elimina">
		</form>
	<?php
		}
		else
			echo " Nessun personaggio &egrave; presente nel database.";
		mysql_close($connection);
	?>
  </body>
</html>