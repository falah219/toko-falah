<?php 
    session_start();
    if(!isset($_SESSION["login"])) {
        header("Location: loginAdmin.php");
        exit;
    }
    require "functions.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>TOKOpedei</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>
<body>
	<!-- header -->
	<header>
		<div class="container">
			<h1><a href="admin.php">TOKOpedei</a></h1>
			<ul>
				<li><a href="data-kategori.php">Data Kategori</a></li>
				<li><a href="data-produk.php">Data Produk</a></li>
				<li><a href="logoutAdmin.php">Logout</a></li>
			</ul>
		</div>
	</header>

	<!-- content -->
	<div class="section">
		<div class="container">
			<h3>Profil</h3>
			<div class="box">
				<div class="col-2">
					<img src="img/falah.jpeg" width="100%" height="40%">
				</div>
				<div class="col-2">
					<h1>Selamat Datang di Halaman Admin</h1><br/>
					<h3>Falah Yudhistira Hanan</h3>
					<h3>L200190038</h3>
					<h3>Kelas A</h3>
					<h3>Ringinanom Rt.06 RW.18 Sragen Kulon, Sragen, Sragen</h3>
				</div>
			</div>
		</div>
	</div>

	<!-- footer -->
	<footer>
		<div class="container">
			<small>Copyright &copy; 2021 - TOKOpedei</small>
		</div>
	</footer>
</body>
</html>


