<html>
 <head>
  <title>DB & PHP test</title>
 </head>
 <body>
 <?php
	$connection = mysql_connect("localhost","root","");
	mysql_select_db("Disneyland",$connection);
	$query = "SELECT nome,denominazione FROM Personaggi,Citta
			  WHERE Personaggi.citta = Citta.sigla ORDER BY nome";
	$result = mysql_query($query,$connection);
	if (mysql_num_rows($result) != 0)
	{
		echo "<table border>";
		echo "<tr>";
		echo "<th>Personaggio</th>";
		echo "<th>Citt&agrave;</th>";
		echo "</tr>";
		while ($row = mysql_fetch_array($result)) {
			echo "<tr>";
			echo "<td>$row[nome]</td>";
			echo "<td>$row[denominazione]</td>";
			echo "</tr>";
		}
		echo "</table>";
	}
	else
		echo " Nessun personaggio &egrave; presente nel database.";
	mysql_close($connection);
 ?>
 <br>
  <a href="http://localhost/add.php">
  Aggiungi un nuovo personaggio.
  </a>
  <br>
  <a href="http://localhost/del.php">
  Elimina un personaggio esistente.
  </a>
 </body>
</html>