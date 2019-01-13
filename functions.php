<?php 

use \Hcode\Model\User;

function formatPrice( $nps)
{
	if(!$nps > 0) $nps = 0;
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