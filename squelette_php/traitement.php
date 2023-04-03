<?php
$reponse = 0; // Initialiser la variable $reponse à 0 sinon ça bug
$pseudo =  0; // Initialiser la variable $pseudo à 0 sinon ça bug


if(isset($_POST['question_unique']) && $_POST['question_unique'] == "q") {
    header("Location: question1.html"); // Rediriger vers la question suivante
    exit(); // Terminer l'exécution du script pour éviter les éventuelles executions indésirables
}
if(isset($_POST['pseudo'])) { // Si la clé "pseudo" est définie dans la requête POST
    $pseudo = $_POST['pseudo']; // Ajouter sa valeur à la variable $pseudo
}



// Vérifier si la clé "question_courante" est définie dans la requête POST et qu'elle a la valeur "q1"
if(isset($_POST['question_courante']) && $_POST['question_courante'] == "q1") {
    header("Location: question2.html"); // Rediriger vers la question suivante
    exit(); // Terminer l'exécution du script pour éviter les éventuelles executions indésirables
}
if(isset($_POST['reponse'])) { // Si la clé "reponse" est définie dans la requête POST
    $reponse += $_POST['reponse']; // Ajouter sa valeur à la variable $reponse
}

// Vérifier si la clé "question_courante" est définie dans la requête POST et qu'elle a la valeur "q2"
if(isset($_POST['question_courante']) && $_POST['question_courante'] == "q2") {
    header("Location: question3.html"); // Rediriger vers la question suivante
    exit(); // Terminer l'exécution du script pour éviter les éventuelles executions indésirables
}
if(isset($_POST['reponse2'])) { // Si la clé "reponse2" est définie dans la requête POST
    $reponse += $_POST['reponse2']; // Ajouter sa valeur à la variable $reponse
}

// Vérifier si la clé "question_courante" est définie dans la requête POST et qu'elle a la valeur "q3"
if(isset($_POST['question_courante']) && $_POST['question_courante'] == "q3") {
    header("Location: question4.html"); // Rediriger vers la question suivante
    exit(); // Terminer l'exécution du script pour éviter les éventuelles executions indésirables
}
if(isset($_POST['choix'])) { // Si la clé "choix" est définie dans la requête POST
    $reponse += $_POST['choix']; // Ajouter sa valeur à la variable $reponse
}

// Vérifier si la clé "question_courante" est définie dans la requête POST et qu'elle a la valeur "q4"
if(isset($_POST['question_courante']) && $_POST['question_courante'] == "q4") {
    header("Location: question5.html"); // Rediriger vers la question suivante
    exit(); // Terminer l'exécution du script pour éviter les éventuelles executions indésirables
}
if(isset($_POST['reponse4'])) { // Si la clé "reponse4" est définie dans la requête POST
    $reponse += $_POST['reponse4']; // Ajouter sa valeur à la variable $reponse
}

// Ajouter la valeur de la réponse 5 à la variable $reponse
if(isset($_POST['choix2'])) {
    $reponse += $_POST['choix2'];
}
// Vérifier si la clé "question_courante" est définie dans la requête POST et qu'elle a la valeur "q5"
if(isset($_POST['question_courante']) && $_POST['question_courante'] == "q5") {
    header("Location: resultat.php");// Rediriger vers la page des résultat
    exit(); // Terminer l'exécution du script pour éviter les éventuelles executions indésirables
}

session_start();
$_SESSION['reponse'] = $reponse;

?>

