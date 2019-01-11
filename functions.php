<?php 

use \Hcode\Model\User;

function formatPrice(float $nps)
{

	return number_format($nps, 2, ",", ".");

}

function checkLogin($inadmin = true)
{

	return User::checkLogin($inadmin);

}

function getUserName()
{

	$user = User::getFromSession();

	return $user->getdesperson();

}

 ?>