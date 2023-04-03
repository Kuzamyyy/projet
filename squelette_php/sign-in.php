<?php //enregistrement
//On execute les lignes suivant que quand l'utilisateur à envoyé le formulaire par la méthod post
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $file = fopen("base_de_donnee.csv", "a");
    fputcsv($file, array($_POST['adresse_email'], $_POST['password']));
    
    //Fermeture du fichier
    fclose($file);
    header('Location: index.html');}



?>