<?php

require './classes/Habitation.php';
require './classes/Maison.php';
require './classes/Appartement.php';

/**
 * 1. Créez une classe Habitation, elle contiendra les propriétés:
 *    - pays ( string )
 *    - ville ( string )
 *    - code postal ( entier ou string )
 *    - chambres ( entier )
 *    - pièces ( entier )
 *
 * Définissez tous les setters et les getters.
 *
 *
 *
 * 2. Créez une classe Maison qui étend de Habitation, elle contiendra les propriétés:
 *    - jardin ( booleen )
 *    - etages ( entier )
 *    - garage ( booleen )
 *
 * Définissez tous les getters et les setters.
 *
 *
 *
 * 3. Créez une classe Appartement qui étend de habitation, elle contiendra les propriétés:
 *    - garage ( booleen )
 *
 * Définissez tous les getters et les setters.
 *
 *
 *
 * 4. Créez deux instances de Maison et invoquez toutes les méthodes définies, sauf les setters ( dans index.php ).
 *
 *
 *
 * 5. Créez une instance de Appartement et invoquez toutes les méthodes définies, y compris les setters ( dans index.php ).
 */

$maison1 = new Maison('france','quinson','04500',4,6,true,2,true);
echo "ma maison ce trouve en : ".$maison1->getPays()."<br>".
     "dans la ville de : ".$maison1->getVille()."<br>".
     "code postal : ".$maison1->getCodePostal()."<br>".
     "elle possede ".$maison1->getChambres()." chambres<br>".
     "et ".$maison1->getPieces()." pièces<br>".
     "elle as ".$maison1->hasJardin()." jardin,<br>".
      $maison1->getEtages()." etages<br>".
     "et ".$maison1->hasGarage()." garage<br>";

echo "<br><br>";

$maison2 = new Maison('france','fourmies','59610',3,6,true,2,true);
echo "ma maison 2 ce trouve en : ".$maison2->getPays()."<br>".
    "dans la ville de : ".$maison2->getVille()."<br>".
    "code postal : ".$maison2->getCodePostal()."<br>".
    "elle possede ".$maison2->getChambres()." chambres<br>".
    "et ".$maison2->getPieces()." pièces<br>".
    "elle as ".$maison2->hasJardin()." jardin,<br>".
    $maison2->getEtages()." etages<br>".
    "et ".$maison2->hasGarage()." garage<br>";

echo "<br><br>";

$appart = new Appartement('martinique','le lamentin','972',2,5,0);
echo "mon appart ce trouve en : ".$appart->getPays()."<br>".
    "dans la ville : ".$appart->getVille()."<br>".
    "code postal : ".$appart->getCodePostal()."<br>".
    "elle possede ".$appart->getChambres()." chambres<br>".
    "et ".$appart->getPieces()." pièces<br>".
    "et ".$appart->hasGarage()." garage<br>";