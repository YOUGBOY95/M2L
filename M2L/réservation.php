<?php
session_start();

$id = mysqli_connect("127.0.0.1", "root", "", "m2l");
$date_naissance = "";




if (isset($_POST["inscription"])) {
    $date_naissance = $_POST["date_naissance"];
   

  
    $req = "select * from utilisateurs where date_naissance='$date_naissance' and  nom=''";
    $res = mysqli_query($id, $req);
    if(@mysqli_num_rows($res) != 0){
        $erreur = "Erreur l'utilisateur est déjà enregistrer, veuillez vous connecter";
    }else{
        $req = "INSERT INTO reservation VALUES (NULL,'$date_naissance', '')";
        $res = mysqli_query($id, $req);
        //header("location:M2L.php");
        $valider = "Confirmation d'inscription veuillez-vous connecter";
        //header("location:connexion.php");
     }
 }
 ?>

<!DOCTYPE HTML>
<html>

<head>
    <title>Inscription</title>
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
                   
                        <h1>Test</h1><br>
                
                    <hr>
                   

                        <label>Date de naissance</label>
                        <div class="form-group">
                            <label for="start"></label>
                            <div class="col-sm-2">
                                <input class="form-control" type="date" id="start" name="date_naissance" required>
                            </div>
                        </div><br>


                        <?php if (isset($erreur)) echo "<h3>$erreur</h3>"; ?>
                        <?php if (isset($valider)) echo "<h3>$valider</h3>"; ?>
                        <br>
                        <center><input type="submit" class="button" name="valider" value="Valider"></center>
                    </form>
                </body>
            </div>
        </section>

        <?php include 'footer.php'; ?>