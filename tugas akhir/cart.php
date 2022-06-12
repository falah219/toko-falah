<?php 
    session_start();
    if(!isset($_SESSION["login"])) {
        header("Location: cart.php");
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
				<table>
                    <tr>
                        <td>Nama Barang</td>
                    </tr>
                    <?php
                        

                    ?>
                </table>
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


