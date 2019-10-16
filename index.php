<?php
include('login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: profile.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>  </title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="main">
<h1>Veuillez entrer votre login et votre mot de passe pour vous connecter </h1>
<div id="login">
<h2>Login Form</h2>
<form  action="" method="post">
<label>Login :</label>
<input id="name" name="login" placeholder="Login" type="text">
<label>Mot de passe :</label>
<input id="pwd" name="pwd" placeholder="**********" type="pwd">
<input name="valider" type="submit" value=" Se connecter ">
<span><?php echo $error; ?></span>
</form>
</div>
</div>
</body>
</html>