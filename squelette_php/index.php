<?php //enregistrement
//On execute les lignes suivant que quand l'utilisateur à envoyé le formulaire par la méthod post
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $file = fopen("base_de_donnee.csv", "a");
    fputcsv($file, array($_POST['Username'], $_POST['password']));
    
    //Fermeture du fichier
    fclose($file);
    header('Location: index2.html');}

?>

<link rel="stylesheet" href="sign-in.css">
<div class="loginBox">
    <img class="user" src="https://freepngimg.com/download/icon/1000546-detective-emoji-man-icon-download-free.png" height="100px" width="100px">
    <h3>S'enregistrer</h3>
    <form method="POST">
        <div class="inputBox"> <input id="Username" type="text" name="Username" placeholder="Username"> <input id="pass" type="password" name="password" placeholder="Password"> </div> <input type="submit" name="envoi" value="S'enregistrer">
    </form>
    <a href="#">Mot de Passe Oublié?<br> </a>


</div>
