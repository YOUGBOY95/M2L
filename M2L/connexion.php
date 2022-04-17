<?php
session_start();
if (isset($_POST["bouton"])){
    $login = $_POST["login"];
    $mdp = $_POST["mdp"];
    $id = mysqli_connect("127.0.0.1", "root", "", "m2l");
    $req = "select * from utilisateurs where login='$login' and mdp='$mdp'";
    $res = mysqli_query($id, $req);
    if (@mysqli_num_rows($res) != 0) {
    
        $_SESSION["login"] = $login;
        $_SESSION["mdp"] = $mdp;
        header("location:M2L.php");
        exit;
    } else {
       $erreur = "Erreur nom d'utilisateur ou de mot de passe.";
    }
}
?>

<!DOCTYPE HTML>
<html>

<head>
    <title>Connexion</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>

<body class="is-preload">
    <div id="page-wrapper">

        <?php include 'header.php'; ?>

        <section class="wrapper style1">
            <div class="container">
                <body>
                    
                        <center><h1>CONNEXION</h1></center>
                        <br>
                    
                    <hr>
                    <form method="POST">

                        <label>Nom d'utilisateur</label>
                        <input type="text" name="login" placeoholder="Entrez votre login :" required><br><br>

                        <label>Mot de passe</label>
                        <input type="password" name="mdp" placeoholder="Entrez votre mdp :" required><br><br>
                        
                        <?php if (isset($erreur)) echo "<h3>$erreur</h3>"; ?>
                        
                        <center><input type="submit" name="bouton" value="Connexion"></center>
                        
                        
                    </form>
                </body>
                
            </div>
        </section>

        <?php include 'footer.php'; ?>