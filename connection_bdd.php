<?php

try 
{
    /* accès à la base de données via un identifiant et un mdp */
    $bdd = new PDO("mysql:host=localhost;charset=utf8;dbname=CDAABALEO", "root", ""); 

    $reponse = $bdd->query('SELECT * FROM ville');

    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} 

catch (Exception $e) 
{
    echo 'Erreur : ' . $e->getMessage() . '<br />';
    echo 'N° : ' . $e->getCode();
    die('Fin du script');
}


?>