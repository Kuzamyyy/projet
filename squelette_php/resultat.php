<?php
// Vérifier si la variable $reponse est définie dans la session
session_start();
if(!isset($_SESSION['reponse'])) {
    header("Location: index.html"); // Rediriger vers la page d'accueil si la variable n'est pas définie
}

// Récupérer la valeur de la variable $reponse depuis la session
$reponse = $_SESSION['reponse'];

// Afficher le résultat
echo "Votre score est de " . $reponse . " points.";

// Détruire la session pour nettoyer les données
session_destroy();
?>