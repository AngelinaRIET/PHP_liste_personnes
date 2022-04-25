<?php

require './05-tableaux_de_personnes.php';

echo '<h1>liste d\'une personne</h1>';

echo '<ul>';
foreach($personnes as $id => $unePersonne){
    //méthode la plus propre qui est commenté
    //echo '<li><a href="detail-personne.php?id= . $id .'">'. $unePersonne['email'] . '</a></li>';
    $email = $unePersonne['email'];
    echo "<li><a href=\"detail-personne.php?id=$id\">$email</a></li>";
}

echo '</ul>'; 

