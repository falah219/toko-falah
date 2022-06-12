<?php 
	error_reporting(0);
	session_start();
	if(!isset($_SESSION["login"])) {
		header("Location: login.php");
		exit;
	}
	require "functions.php";

	$produk = mysqli_query($conn, "SELECT * FROM tb_product WHERE product_id = '".$_GET['id']."' ");
	$p = mysqli_fetch_object($produk);
	$keranjang = mysqli_query($conn, "SELECT * FROM tb_product");
	$k = mysqli_fetch_object($keranjang);
	
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
			<h1><a href="index.php">TOKOpedei</a></h1>
			<ul>
				<li><a href="produk.php">Produk</a></li>
				<li><a href="Logout.php">Logout</a></li>
			</ul>
		</div>
	</header>

	<!-- search -->
	<div class="search">
		<div class="container">
			<form action="produk.php">
				<input type="text" name="search" placeholder="Cari Produk" value="<?php echo $_GET['search'] ?>">
				<input type="hidden" name="kat" value="<?php echo $_GET['kat'] ?>">
				<input type="submit" name="cari" value="Cari Produk">
			</form>
		</div>
	</div>

	<!-- product detail -->
	<div class="section">
		<div class="container">
			<h3>Detail Produk</h3>
			<div class="box">
				<div class="col-2">
					<img src="produk/<?php echo $p->product_image ?>" width="100%">
				</div>
				<div class="col-2">
					<h3><?php echo $p->product_name ?></h3>
					<h4>Rp. <?php echo number_format($p->product_price) ?></h4>
					<p>Deskripsi :<br>
						<?php echo $p->product_description ?>
					</p>
					<p><a href="keranjang.php?nama=<?php echo $k['product_name']?>">masuk keranjang</a></p>
				</div>
			</div>
		</div>
	</div>

	<!-- footer -->
	<div class="footer">
		<div class="container">
			<h4>Alamat</h4>
			<p></p>

			<h4>Email</h4>
			<p></p>

			<h4>No. Hp</h4>
			<p></p>
			<small>Copyright &copy; 2021 - TOKOpedei</small>
		</div>
	</div>
</body>
</html>