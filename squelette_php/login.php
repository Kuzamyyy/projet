<?php
//connexion
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Username = $_POST['Username'];
    $password = $_POST['password'];

    $comptes = array_map('str_getcsv', file('base_de_donnee.csv'));
    $compte_bon = false;
    foreach ($comptes as $compte) {
        if ($compte[0] == $Username && $compte[1] == $password) {
            $compte_bon = true;
            break;
        }
    }

    if ($compte_bon) {
        header('Location: index2.html');
    } else {
        echo "Adresse mail ou mot de passe incorrect";
    }
}
?>


<link rel="stylesheet" href="login.css">
<div class="loginBox">
    <img class="user" src="https://freepngimg.com/download/icon/1000546-detective-emoji-man-icon-download-free.png" height="100px" width="100px">
    <h3>Test de Pureté</h3>
    <form action="test.php" method="post">
        <div class="inputBox"> <input id="uname" type="text" name="pseudo" placeholder="Username"> <input id="pass" type="password" name="mdp" placeholder="Password"> </div> <input type="submit" name="envoi" value="Login">
    </form>
    <a href="#">Mot de Passe Oublié?<br> </a>


</div>