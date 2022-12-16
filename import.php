<?php


/**************************************************
*
* Import
*
* Peter Wortelker
*
* Stand : 23.09.2021
*
**************************************************/

function imp_open($pfad)
{
	// Daten auslesen und in der Tabelle speichern
	$root		= "../files/";

	$content 	= file($root.$pfad);
					
	return $content;
};


?>

