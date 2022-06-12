<?php 
    session_start();

    if(isset($_COOKIE['login'])) {
        if($_COOKIE['login'] == 'true') {
            $_SESSION['login'] = true;
        }
    }

    if(isset($_SESSION["login"])) {
        header("Location: admin.php");
        exit;
    }   
    require 'functions.php';

    if(isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $result = mysqli_query($conn, "SELECT * FROM adminn WHERE username = '$username'");

        // cek username
        if(mysqli_num_rows($result) === 1){
            // cek password
            $row = mysqli_fetch_assoc($result);
            if(password_verify($password, $row['password'])){

                // set session
                $_SESSION["login"] = true;

                // set remember me
                if(isset($_POST['remember'])) {
                    // set cookie
                    setcookie('login', 'true', time()+60);
                }

                header("Location: admin.php");
                exit;
            }
        }
        $error = true;
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Halaman Login Admin</title>

	<!-- Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/animate.css">
	<!-- Custom Stylesheet -->
	<link rel="stylesheet" href="css/login.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</head>

<body>
        <?php if(isset($error)) : ?>
            <script>
				alert ('Username atau Password salah !');
				document.location.href = 'admin.php';
			</script>
        <?php endif; ?>
    <form action="" method="POST">
	<div class="container">
		<div class="top">
			<h1 id="title" class="hidden"><span id="logo">Login <span>Admin</span></span></h1>
		</div>
		<div class="login-box animated fadeInUp">
			<div class="box-header">
				<h2>Log In</h2>
			</div>
			<label for="username">Username</label>
			<br/>
			<input type="text" name="username" id="username">
			<br/>
			<label for="password">Password</label>
			<br/>
			<input type="password" name="password" id="password">
			<br/>
			<button type="submit" name="login">LogIn</button>
			<br/>
			<p class="small"><a href="index.php">Login Member</a></p>
		</div>
	</div></form>
</body>



</html>