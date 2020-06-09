<?php

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

  <title>Validation des missions</title>

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
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#">Validation des missions</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="paiement.php">Paiements des frais</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="param.php">paramétrages</a>
          </li>
        </ul>
        <div class="text-center mt-4">
      </div>
      </div>
        <a class="btn btn-xl btn-outline-light" href="deco.php">Deconnexion</a>
    </div>
  </nav>

<br/><br/><br/><br/><br/><br/>
<div class="container">
    <h1>Validation des missions de vos subordonées</h1>
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">N°</th>
        <th scope="col">Nom du salarié</th>
        <th scope="col">Prenom du salarié</th>
        <th scope="col">Début de la mission</th>
        <th scope="col">Fin de la mission</th>
        <th scope="col">Lieu de la mission</th>
        <th scope="col">Validation</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>13 Avril</td>
        <td>14 Avril</td>
        <td>Paris</td>
        <td><button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton">Valider</button></td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>15 Mai</td>
        <td>16 Mai</td>
        <td>Lyon</td>
        <td><button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton">Valider</button></td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Larry</td>
        <td>the Bird</td>
        <td>7 Juillet</td>
        <td>8 Juillet</td>
        <td>Marseille</td>
        <td><button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton">Valider</button></td>
      </tr>
    </tbody>
  </table>
</div>

