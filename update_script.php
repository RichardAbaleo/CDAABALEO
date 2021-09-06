<?php

/* Heure actuel */
date_default_timezone_set('UTC');

/* Récupération données formulaire */
$id = $_GET["id"];
$nom = htmlspecialchars($_POST["nom"]); 
$dep = htmlspecialchars($_POST["dep"]);
$cp = htmlspecialchars($_POST["cp"]);
$datemodif = date("Y-m-d H:i:s"); 

require "connection_bdd.php";

try {

/* requête mysql */
$rq = "UPDATE ville SET nom=:nom, dep=:dep,
  cp=:cp, datemodif=:datemodif WHERE id=".$id;
$requete = $bdd->prepare($rq);

/* attribution des nouvelles valeurs */
$requete->bindValue(':nom', $nom, PDO::PARAM_STR);
$requete->bindValue(':dep', $dep, PDO::PARAM_STR);
$requete->bindValue(':cp', $cp, PDO::PARAM_INT);
$requete->bindValue(':datemodif', $datemodif, PDO::PARAM_STR);

/* Execution requête*/
$requete->execute();
$requete->closeCursor();
}

/* si erreur */
catch (Exception $e) {
    echo "La connexion à la base de données a échoué ! <br>";
    echo "Merci de bien vérifier vos paramètres de connexion ...<br>";
    echo "Erreur : " . $e->getMessage() . "<br>";
    echo "N° : " . $e->getCode();
    die("Fin du script");
}

header("Location: index.php");
exit;

?>