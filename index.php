<?php
/**
 * Created by PhpStorm.
 * User: sudarshanmahesh
 * Date: 2019-02-05
 * Time: 13:05
 */

class auto {
	public $merk;
	public $type;
	public $kenteken;
	public $kilometerstand;
	public $prijs;
	public $bouwjaar;
}

class klant {
	public $voornaam;
	public $achternaam;
	public $geboortedatum;
	public $email;
	public $nieuwsbrief;
	public $autos;
	public $laatste_apk;
}


$auto1                 = new auto();
$auto1->merk           = "Automerk";
$auto1->type           = "Autotype";
$auto1->kenteken       = "1-AAA-11";
$auto1->kilometerstand = 250000;
$auto1->prijs          = 70000.00;
$auto1->bouwjaar       = 2015;

$klant1                = new klant();
$klant1->voornaam      = "Piet";
$klant1->achternaam    = "van Brugge";
$klant1->geboortedatum = "27-11-1988";
$klant1->email         = "p.brugge@live.com";
$klant1->nieuwsbrief   = true;
$klant1->autos         = [ $auto1 ];
$klant1->laatste_apk   = "15-03-2018";

echo $klant1->voornaam . "<br>";
echo $klant1->achternaam . "<br>";
echo $klant1->geboortedatum . "<br>";
echo $klant1->email . "<br>";
echo $klant1->nieuwsbrief . "<br><br>";
echo $klant1->autos[0]->merk . "<br>";
echo $klant1->autos[0]->type . "<br>";
echo $klant1->autos[0]->kenteken . "<br>";
echo $klant1->autos[0]->kilometerstand . "<br>";
echo $klant1->autos[0]->prijs . "<br>";
echo $klant1->autos[0]->bouwjaar . "<br><br>";
echo $klant1->laatste_apk . "<br>";