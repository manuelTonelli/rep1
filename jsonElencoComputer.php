<?php require("./connection.php");
	$sql= " select * from persona";
	
	$rs=$con->query($sql);
	if(!$rs){
		die("sql error". $con->error . "<br/>" . $sql);
	}
	$vet=array();
	while($record= $rs->fetch_assoc()){
		array_push($vet,$record);
	}
	$json=json_encode($vet);
	echo $json;

?>