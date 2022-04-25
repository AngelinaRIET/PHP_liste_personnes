<?php
require './05-tableaux_de_personnes.php';

echo '<h1>détail d\'une personne</h1>';

$id = $_GET['id'];

echo '<img src="'. $personnes[$id]['photo'].'">';
echo '<p> Nom : '. $personnes[$id]['lastname'] .'</p>';
echo '<p>Prénom : '. $personnes[$id]['firstname'] .'</p>';
echo '<p>City : '. $personnes[$id]['city'] .' </p>';
echo '<p>Né(e) en : '. $personnes[$id]['year'] .'</p>';