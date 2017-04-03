<?php

require(ROOT . "model/LoginModel.php");


function login()
{
	//formulier tonen
	render("login/login");
}

function loginAccount() 
{
	if(isset($_POST['gebruikersnaam']) && isset($_POST['wachtwoord'])) {
		getMember($_POST['gebruikersnaam'], $_POST['wachtwoord']);
	}
	else {
		echo 'Velden zijn leeg!';
		render("login/login");
		exit();
	}

	header("Location:" . URL . "login/index");
}

function index($Gebruikersnaam = '') {
	
	$user = getNickname($Gebruikersnaam);

	if(empty($user)) {
		echo 'Gebruikersnaam niet gevonden!';
		render("login/login");
		exit();
	}
	else {
		render("login/index", array(
			'user' => $user
		));
	}
}

function logOut()
{
	//Terug naar login na uitloggen
	render("login/login");
}