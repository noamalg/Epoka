<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=epoka', 'root', '');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}
?>