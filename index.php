<?php
 	include 'koneksi.php';
?>

<!doctype html>
<html lang="en">
<head>
	 <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="./styles/style-main.css">
	<title>999Stories</title>
</head>
<body>
	<?php require_once 'process.php'; ?>

	<nav>
		<div class="container">
			<div class="upper-nav">
				<h1>999Stories</h1>
			</div>
			<div class="lower-nav">
				<ul class="nav-links">
					<li class="nav-link"><a href="#">Home</a></li>
					<li class="nav-link"><a href="about.html">About</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="intro">
		<div class="container">
			<h1>When happiness, sadness, madness, and love encrypted to words</h1>
		</div>
	</div>
	<div class="main">
		<div class="container">
			<h1 class="lat-posts">Recent Posts</h1>
			<?php
				$data = mysqli_query($mysqli, "SELECT * FROM articles");
				while($artikel = mysqli_fetch_array($data)){
			?>
			<div class="artikel">
				<div class="gambar">
					<img src="./assets/article-logo.png" width="120px">
				</div>
				<div class="article-info">
					<h1><a href="./article/article.php?id=<?php echo $artikel['id']; ?>"><?php echo $artikel['title'];?></a></h1>
					<p><?php echo $artikel['desk']; ?></p>
					<p><?php echo $artikel['tanggal']; ?></p>
				</div>
			</div>
			<?php
				}
			?>
		</div>
	</div>

	<footer id="main-footer">
		<p>2020 &copy; Tsaqif Ammar</p>
	</footer>
	<script type="text/javascript" src="./script/script.js"></script>
</body>
</html>