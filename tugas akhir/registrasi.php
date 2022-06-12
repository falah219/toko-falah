<?php 
require 'functions.php';

if(isset($_POST['register'])) {
    if(registrasi($_POST) > 0) {
        echo "<script>
            alert('User berhasil ditambahkan !');
            document.location.href = 'index.php';
            </script>";
    } else {
        mysqli_error($conn);
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Halaman Registrasi</title>

	<!-- Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="login/css/animate.css">
	<!-- Custom Stylesheet -->
	<link rel="stylesheet" href="login/css/style.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</head>

<body>
    <form action="" method="POST">
	<div class="container">
		<div class="top">
			<h1 id="title" class="hidden"><span id="logo">Registrasi</span></h1>
		</div>
		<div class="login-box animated fadeInUp">
			<div class="box-header">
				<h2>Registrasi</h2>
			</div>
			<label for="username">Username</label>
			<br/>
			<input type="text" name="username" id="username">
			<br/>
			<label for="password">Password</label>
			<br/>
			<input type="password" name="password" id="password">
            <br/>
            <label for="password">Konfirm Password</label>
			<br/>
			<input type="password" name="password2" id="password2">
			<br/>
			<button type="submit" name="register">Registrasi</button>
			<br/>
			<p class="small"><a href="#">Login Admin</a>   |   <a href="registrasi.php">Register Here</a></p>
		</div>
	</div></form>
</body>



</html>