<?php
session_start();

$id = mysqli_connect("127.0.0.1", "root", "", "m2l");
$id_salle = "";
$nom_salle = "";
$disponible = "";
$heuredebut = "";
$heurefin = "";
$jour = "";
$type = "";
$capacite = "";



if (isset($_POST["valider"])) {
    print_r($_POST);
    $id_salle = $_POST["nom_salle"];
    //$nom_salle = $_POST["nom_salle"];
    //$disponible = $_POST["disponible"];
    $heuredebut = $_POST["heuredebut"].":00";
    $heurefin = $_POST["heurefin"].":00";
    $jour = $_POST["jour"];
    //$type = $_POST["type"];
    //$capacite = $_POST["capacite"]; 

    $req = "SELECT * FROM salles WHERE nom_salle='$nom_salle'";
    $res = mysqli_query($id, $req);
    if(@mysqli_num_rows($res) != 0){
        $erreur = "Erreur l'utilisateur est déjà enregistrer, veuillez vous connecter";
    }else{
        $req1 = "INSERT INTO reservation VALUES (NULL, '$id_salle,'$heuredebut','$heurefin','$jour')";
        echo $req1;
        $res1 = mysqli_query($id, $req1);
        //header("location:M2L.php");
       $message = "Votre reservation à été enregistré. \r Date : " . $jour . "\r Heure : " . $heuredebut;
     }
 }
 ?>

<!DOCTYPE HTML>
<html>

<head>
    <title>Réservation de salles</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>

<body class="is-preload">
    <div id="page-wrapper">

        <?php include 'header.php'; ?>

        <!-- Main -->
        <section class="wrapper style1">
            <div class="container">
                
                <center>
                    <h2>Réservation de salles</h2>
                    </center>
                <br>
                <br>
                <form action="" method="post">
                <div class="form-group">
                    <label for="salle" class="col-sm-2 control-label" name="nom_salle">Selection de la salle</label>
                    <div>
                        <!-- Dropdown qui selectionne les salles disponibles -->
                        <SELECT class="form-control" name="nom_salle">
                        <?php
                        $req = "SELECT * FROM salles";
                        $res = mysqli_query($id, $req); 
                        while($ligne = mysqli_fetch_assoc($res)){
                        ?>
                        <OPTION value = "<?=$ligne["id_salle"];?>"> <?php echo $ligne["nom_salle"]." ( ".$ligne["type"]." - ".$ligne["capacite"]." personnes ) ";?> </OPTION>
                        <?php
                        }
                        ?>
                        </SELECT>
                    </div>
                </div>
                <br>
                <br>
                <div class="form-group">
                    <label for="appt-time" class="col-sm-2 control-label">Heure de début</label>
                    <div>
                        <!-- FORMAT DATE NON COMPATIBLE SQL -->
                        <input class="form-control" id="appt-time" format="HH:MM:SS" type="time" name="heuredebut">
                    </div>
                </div>
                <br>
                <br>
                <div class="form-group">
                    <label for="appt-time" class="col-sm-2 control-label">Heure de fin</label>
                    <div>
                        <input class="form-control" id="appt-time" type="time" name="heurefin">
                    </div>
                </div>
                <br>
                <br>
                <div class="form-group">
                    <label for="start" class="col-sm-2 control-label">Date</label>
                    <div>
                        <!-- FORMAT DATE NON COMPATIBLE SQL -->
                        <input class="form-control" type="date" date-format="YYYY-MM-DD" id="start" name="jour">
                    </div>
                </div><br>
                <?php if (isset($message)) echo nl2br ("<h3>$message</h3>"); ?>
                <center><input type="submit" class="button" name="valider" value="Valider"></center>
                </form>
            </div>


           
            <hr><br>
    </div>
    </section>
    <?php include 'footer.php'; ?>