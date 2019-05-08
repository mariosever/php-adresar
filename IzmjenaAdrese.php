<!-- IzmjenaAdrese.php -->

<?php 

include("header.php");
include("OtvoriVezu.php");


// otvaranje veze na bazu

$veza = OtvoriVezu();

$sql = "SELECT * FROM kontakti WHERE Id = " . $_GET['id'];

$result = $veza->query($sql);


if ( $result->num_rows > 0 ) {

	$row = $result->fetch_assoc();

	$id = $row["Id"];
	$ime = $row["Ime"];
	$adresa = $row["Adresa"];
	$grad = $row["Grad"];
	$email = $row["Email"];
	$spol = $row["Spol"];
	$prijatelj = $row["Prijatelj"];


} else {

	echo "Dohvaćeno 0 rezultata.";

}

?>

<h1>Izmjena podataka za: <?php  echo $ime  ?> </h1>

	<form method="POST" action="SpremiIzmjenu.php">
		
		Ime i prezime:<br>
		<input type="text" name="ime" value="<?php echo $ime ?>" >
		<br><br>

		Adresa:<br>
		<input type="text" name="adresa" value="<?php echo $adresa ?>" >
		<br><br>

		Grad:<br>
		<select name="grad" id="grad">
			<option <?php if ($grad == "Zagreb") echo "selected" ?>>Zagreb</option>
			<option <?php if ($grad == "Split") echo "selected" ?>>Split</option>
			<option <?php if ($grad == "Rijeka") echo "selected" ?>>Rijeka</option>
		</select>
		<br><br>

		Email:<br>
		<input type="email" name="email" value="<?php echo $email ?>">
		<br><br>

		Spol:<br>
		<input type="radio" name="spol" value="M" <?php if ($spol == "M") echo "checked" ?>> Muški <br>
		<input type="radio" name="spol" value="Ž" <?php if ($spol == "Ž") echo "checked" ?>> Ženski
		<br><br>

		Prijatelj: <br>
		<input type="checkbox" name="prijatelj" <?php if ($prijatelj == "Da") echo "checked" ?>> Dodaj prijatelja
		<br><br>

		<input type="hidden" name="id" value="<?php echo $id ?>">

		<input type="submit" value="Spremi">
		<input type="reset" value="Odustani">

	</form>
