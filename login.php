<?php
 
$bdd = new PDO('mysql:host=localhost; dbname=epoka', "root", "");
 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
 
if(isset($_SESSION['auth'])){
    header('Location: index.php');
}
 
$errors = array();
 
 
if(!empty($_POST) && !empty($_POST['User_username']) && !empty($_POST['User_password'])){
 
    if($req = $pdo->prepare('SELECT * FROM users WHERE (User_username = :User_username)')){
    
    $req->execute(['User_username' => $_POST['User_username']]);
 
    $user = $req->fetch();
 
    if($user){
        if(password_verify($_POST['User_password'], $user->pass)) {
 
            session_start();
            $_SESSION['auth'] = $user;
            $_SESSION['flash']['success'] = 'Vous êtes connecté';
            header('Location: index.php');
            exit();
    
        } else {
    
            $errors['pass'] = "Identifiant ou mot de passe invalide.";
            header('Location: connexion.php');
        }
    } else {
    
        $errors['user'] = "Identifiant ou mot de passe invalide.";
 
    }  
    
}
    
}
?>