<?php
include_once dirname(__FILE__) . "./../../libs/utiliy.php";

$db = connectDB("localhost","bdd_gestion_des_stocks","root","root");

function createProduct(){
	global $db;
	$sql = "INSERT INTO products (nom, prix, created_at)
	 VALUES (:nom, :prix, :created_at)";

	 $statement = $db->prepare($sql);
	 $statement->bindParam(":nom, $_POST["nom"],PDO::PARAM_STR");
	 $statement->bindParam(":prix, $_POST["prix"],PDO::PARAM_INT");
	 $statement->bindParam(":created_at, $_POST["created_at"],PDO::PARAM_STR");

}
 
