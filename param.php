<?php include('bdd.php'); 

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$user = $_SESSION['auth'];

if($user->User_roleID == "2"){
      header('Location: index.php');
   }
?>

<!DOCTYPE html>
<html lang="fr">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Paramétrages</title>

  <!-- Custom fonts for this theme -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Theme CSS -->
  <link href="css/freelancer.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="index.php">Epoka</a>
      <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="validation.php">Validation des missions</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="paiement.php">Paiements des frais</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#">paramétrages</a>
          </li>
        </ul>
        <div class="text-center mt-4">
      </div>
      </div>
        <a class="btn btn-xl btn-outline-light" href="deco.php">Deconnexion</a>
    </div>
  </nav>

  <br/><br/><br/><br/><br/><br/>
  <h1><center>Paramétrage de l'application</center></h1>
  <br/><br/>
  <center><h2>Montant du remboursement au KM </h2></center>
   <br/>

<center>
   <div class="form-group col-md-2">
      <input type="text" class="form-control" id="inputZip" placeholder="Remboursement au KM">
    </div>
    <div class="form-group col-md-2">
      <input type="text" class="form-control" id="inputZip" placeholder="Indemnité d'hebergement">
    </div>
<br/>
  <button type="submit" class="btn btn-primary mb-2">Valider</button>
</center>

<br/><br/><br/><br/>
  <h1><center>Distance entre ville</center></h1>
<br/>

  <center>
    <div class="form-group col-md-4">
          <label for="inputState">De :</label>
          <select id="inputState" class="form-control" name="ville1">
            <?php
 
            $reponse = $bdd->query('SELECT ville_nom_reel FROM villes WHERE ville_nom_reel LIKE "P%"');
             
            while ($donnees = $reponse->fetch())
            {
            ?>
           <option value="<?php echo $donnees['villes']; ?>"> <?php echo $donnees['ville_nom_reel']; ?></option>
            <?php
            }
             
            ?>
          </select>
        </div>
    <div class="form-group col-md-4">
          <label for="inputState">à :</label>
          <select id="inputState" class="form-control" name="ville2">
            <?php
 
            $reponse = $bdd->query('SELECT ville_nom_reel FROM villes WHERE ville_nom_reel LIKE "A%"');
             
            while ($donnees = $reponse->fetch())
            {
            ?>
           <option value="<?php echo $donnees['villes']; ?>"> <?php echo $donnees['ville_nom_reel']; ?></option>
            <?php
            }
             
            ?>
          </select>
        </div>
        <?php 

        $latitude=$_GET[lat];
        $longitude=$_GET[lon];



        $formule="(6366*acos(cos(radians($latitude))*cos(radians(`lat`))*cos(radians(`lon`) -radians($longitude))+sin(radians($latitude))*sin(radians(`lat`))))";
        ?>
      <div class="form-group col-md-2">
      <label for="inputZip">Distance en km :</label>
      <input type="text" class="form-control" id="inputZip" value="<?php echo $formule['villes']; ?>"> <?php echo $formule['villes']; ?>
    </div>
    <br/>
  <button type="submit" class="btn btn-primary mb-2">Valider</button>
  </center>

  <br/><br/><br/><br/>
<div class="container">
    <h1><center>Distance entre ville déjà saisies</center></h1>
  <br/>
  <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">De</th>
          <th scope="col">A</th>
          <th scope="col">Km</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td>
        </tr>
      </tbody>
    </table>
  </div>