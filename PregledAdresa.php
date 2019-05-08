<!-- PregledAdresa.php -->

<?php 

include("header.php");
include("OtvoriVezu.php");


// otvaranje veze na bazu

$veza = OtvoriVezu();

$sql = "SELECT * FROM kontakti";

$result = $veza->query($sql);


if ( $result->num_rows > 0 ) {

?>


	<h1>Pregled adresa</h1>

	<div style="overflow-x:auto;"><!-- responsive -->
	
		<table border="1" id="tablica">
			<tr>
				<th>Ime i prezime</th>
				<th>Adresa</th>
				<th>Grad</th>
				<th>Email</th>
				<th>Spol</th>
				<th>Prijatelj</th>
				<th>Brisanje</th>
			</tr>

			<?php
			    // ispisujemo tablicu

				while( $row = $result->fetch_assoc() ) {

					$id = $row["Id"];
					$ime = $row["Ime"];
					$adresa = $row["Adresa"];
					$grad = $row["Grad"];
					$email = $row["Email"];
					$spol = $row["Spol"];
					$prijatelj = $row["Prijatelj"];

					echo "<tr>";
					echo "<td>$ime <a class='icon' href='IzmjenaAdrese.php?id=$id'><i class='fas fa-edit'></i></a> </td>";
					echo "<td>$adresa</td>";
					echo "<td>$grad</td>";
					echo "<td>$email</td>";
					echo "<td>$spol</td>";
					echo "<td>$prijatelj</td>";
					echo "<td><a class='icon' href='ObrisiAdresu.php?id=$id'><i class='fas fa-trash'></i></a> </td>";
					echo "</tr>";

				}
			    
			?>

		</table>
	
	</div>

<?php

} else {

	echo "Dohvaćeno 0 rezultata iz baze.";

}

$veza->close();
	
include("footer.php");

?>

