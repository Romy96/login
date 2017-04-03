<?php

function getMember($Gebruikersnaam, $Wachtwoord) {
	//Check of account bestaat door naar de gebruikersnaam en het wachtwoord te kijken
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM members WHERE gebruikersnaam=:gebruikersnaam AND wachtwoord=:wachtwoord";
	$query = $db->prepare($sql);
	$query->execute(array(
		':gebruikersnaam' => $Gebruikersnaam,
		':wachtwoord' => $Wachtwoord
	));

	$db = null;

	return $query->fetch(PDO::FETCH_ASSOC);

}

function getNickname($Gebruikersnaam) 
{
	//Check of gebruikersnaam al beschikbaar is
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM members WHERE gebruikersnaam=:gebruikersnaam";
	$query = $db->prepare($sql);
	$query->execute(array(
		':gebruikersnaam' => $Gebruikersnaam
	));

	$db = null;

	return $query->fetch(PDO::FETCH_ASSOC);
}