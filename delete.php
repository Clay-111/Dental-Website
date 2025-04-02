<?php
	if(isset($_GET["id"])){
		$id = $_GET["id"];

		$servername = "localhost";
		$username = "root";
		$password = "";
		$database = "contact_db";

		$connection = new mysqli($servername, $username, $password, $database);

		$sql = "DELETE FROM `contact_form` WHERE id=$id";
		$connection->query($sql);
	}

	header("Location: /PROJECT/CRUD.php");
	exit;
?>