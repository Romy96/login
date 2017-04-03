<?php

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

function createMember($Voornaam, $Tussenvoegsel, $Achternaam, $Gebruikersnaam, $Email, $Wachtwoord) 
{
	// Maakt een member aan
	$db = openDatabaseConnection();

	$sql = "INSERT INTO members(voornaam, voorvoegsel, achternaam, gebruikersnaam, email, wachtwoord) VALUES (:voornaam, :tussenvoegsel, :achternaam, :gebruikersnaam, :email, :wachtwoord)";
	$query = $db->prepare($sql);
	$query->execute(array(
		':voornaam' => $Voornaam,
		':tussenvoegsel' => $Tussenvoegsel,
		':achternaam' => $Achternaam,
		':gebruikersnaam' => $Gebruikersnaam,
		':email' => $Email,
		':wachtwoord' => $Wachtwoord
		));

	$db = null;
}