<html>
  <head>
   <title>DB & PHP test: INSERT</title>
  </head>
  <body>
   <?php
     $personaggio = $_GET["personaggio"];
     $citta = $_GET["citta"];
     $connection = mysql_connect("localhost","root","");
     mysql_select_db("Disneyland",$connection);
     $query = " SELECT * FROM Personaggi WHERE nome = '$personaggio'";
     $result = mysql_query($query,$connection);
     if (mysql_num_rows($result) != 0)
       echo " Il personaggio $personaggio &egrave; gi&agrave; presente nel database!";
     else {
       $query = " INSERT INTO Personaggi VALUES ('$personaggio','$citta')";
       $result = mysql_query($query,$connection);
       echo " Il personaggio $personaggio &egrave; stato aggiunto al database!";
     }
     mysql_close($connection);
   ?><br><br>
   <a href="http://localhost/disneyland.php">
    Visualizza elenco personaggi.
   </a>
  </body>
</html>