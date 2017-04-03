<?php

require(ROOT . "model/RegisterModel.php");


function create()
{
	//formulier tonen
	render("register/create");
}

function createSave($Gebruikersnaam = '')
{
	//Roep functie aan met een variable
	$User = getNickname($Gebruikersnaam);

	// Als functie een resultaat heeft, ga dan terug naar form.
	if(!empty($User)) {
		echo 'Gebruikersnaam bestaat al!';
		render("register/create");
		exit();
	}

	$Wachtwoord = $_POST['wachtwoord'];
	$Herhaal_wachtwoord = $_POST['wachtwoord2'];
	$Hash = md5($Wachtwoord);

	if ($Wachtwoord !== $Herhaal_wachtwoord) {
		echo 'Wachtwoorden komen niet overeen!';
		render("register/create");
		exit();
	}

	// Als de waardes van de velden in het formulier bestaan, voer dan functie uit.
	if (isset($_POST['voornaam']) && isset($_POST['tussenvoegsel']) && isset($_POST['achternaam']) && isset($_POST['gebruikersnaam']) && isset($_POST['email']) && isset($_POST['wachtwoord'])) {
		createMember($_POST['voornaam'], $_POST['tussenvoegsel'], $_POST['achternaam'], $_POST['gebruikersnaam'], $_POST['email'], $Hash);
	} else {
		//Als het niet werkt, dan geef je het formulier weer.
		render("register/create");
		exit();
	}

	header("Location:" . URL . "home/index");
}