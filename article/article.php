<?php
	include '../koneksi.php';
?>

<!doctype html>
<html lang="en">
<head>
	 <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="../styles/style-about.css">
	<title>999Stories</title>
</head>
<body>
	<?php 
		$id = $_GET['id'];
		$result = $mysqli->query("SELECT * FROM articles WHERE id=$id");
		$artikel = mysqli_fetch_array($result);
	?>
	<nav>
		<div class="container">
			<div class="upper-nav">
				<a href="../index.php"><h1>999Stories</h1></a>
			</div>
			<div class="lower-nav">
				<ul class="nav-links">
					<li class="nav-link"><a href="../index.php">Home</a></li>
					<li class="nav-link"><a href="../about.html">About</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="main">
		<div class="container">
			<div class="gambar">
				<h1><?php echo $artikel['title']; ?></h1>
				<h2><?php echo $artikel['tanggal']; ?></h2>
			</div>
			<p><?php echo $artikel['isi']; ?></p>
		</div>
	</div>

	<footer id="main-footer">
		<p>2020 &copy; Tsaqif Ammar</p>
	</footer>

	<script type="text/javascript" src="./script/script.js"></script>
</body>
</html>