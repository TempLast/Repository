<?php session_start()?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link href="index.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>
    <body>
    <div class="container">
        <h2>Connexion</h2>
        <form action="connexion.php" method="POST"> 

            <div class="box">
            <input type="email" name="email" placeholder="Email"/>
            <label><i class="fa-solid fa-envelope"></i><label>
            </div>
            
            <div class="box">
            <input type="text" name="username" placeholder="Nom d'utilisateur" required pattern="[A-Za-z\-]+"/>
            <label><i class="fa fa-user"></i><label>
            </div>
            
            <div class="box">
            <input type="password" name="password" placeholder="Mot de passe" required pattern="(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[#?!@$%^&*_+\-]).{12,}" title="12 caractères minimum dont au moins 1 majuscule, 1 minuscule, 1 chiffre et 1 symbole parmi #?!@$%^&*-_+">
            <label><i class="fa fa-unlock-alt"></i></label>
            </div>

            <div class="box">
            <input type="password" name="password2" placeholder="Vérification Mot de passe" required pattern="(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[#?!@$%^&*_+\-]).{12,}" title="12 caractères minimum dont au moins 1 majuscule, 1 minuscule, 1 chiffre et 1 symbole parmi #?!@$%^&*-_+">
            <label><i class="fa-solid fa-lock"></i></label>
            </div>

            <button type="submit">Se connecter</button>
            <input type="submit" name="submit" value="S'inscrire" formaction="inscription.php">
        </form>
    </div>
    </body>
</html>


<?php
    include "common.php";

    if (isset($_POST["reason"])) {
        $reason = cleanup($_POST["reason"]);
        if (isValidText($reason)) {
            echo "<h2>".$reason."</h2>";
        };
    };

?>







