<!-- ObrisiAdresu.php -->

<?php 

include("header.php");
include("OtvoriVezu.php");

?>

<h1>Brisanje adrese</h1>

<?php

	$id = $_GET['id'];

	$veza = OtvoriVezu();

	$sql = "DELETE FROM kontakti WHERE Id = $id";

	if ($veza->query($sql) === TRUE) {
		echo "<p>Zapis je uspješno obrisan.</p>";
	} else {
		echo "<p>Greška: " . $veza->error . "</p>";
	}

	$veza->close();	

?>

<a href="PregledAdresa.php">Vrati se na pregled</a>

<?php include("footer.php"); ?>
