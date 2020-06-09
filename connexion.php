<?php
 
$pdo = new PDO('mysql:host=localhost; dbname=epoka', "root", "");
 
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
        if($_POST['User_password']  ==  $user['User_password']) {
 
            session_start();
            $_SESSION['auth'] = $user;
            
            header('Location: index.php');
            exit();
    
        } else {
    
            header('Location: connexion.php');
   

        }
    } else {

        header('Location: connexion.php');
 
    }  
    
}
    
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Connexion</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="i/images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="i/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="i/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="i/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="i/vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="i/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="i/vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="i/vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="i/vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="i/css/util.css">
	<link rel="stylesheet" type="text/css" href="i/css/main.css">
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: #000000;">
					<span class="login100-form-title-1">
						Connexion
					</span>
				</div>

				<form class="login100-form validate-form" method="post" action="">
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Identifiant</span>
						<input class="input100" type="text" name="User_username" placeholder="Entrer identifiant">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Mot de passe</span>
						<input class="input100" type="password" name="User_password" placeholder="Entrer de mot de passe">
						<span class="focus-input100"></span>
					</div>

					<div class="flex-sb-m w-full p-b-30">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Se souvenir de moi
							</label>
						</div>

						<div>
							<a href="#" class="txt1">
								Mot de passe oublié ?
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Se connecter
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>