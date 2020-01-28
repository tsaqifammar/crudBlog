<?php
 	include '../koneksi.php';
?>

<!doctype html>
<html lang="en">
<head>
	 <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="../styles/style-crud.css">
	<title>CRUD 999Stories</title>
</head>
<body>
	<nav>
		<div class="container">
			<div class="upper-nav">
				<h1>999Stories</h1>
			</div>
		</div>
	</nav>
	<div class="main">
		<div class="container">
			<div class="jdl-n-create">
				<h1>Existing Articles</h1>
				<a href="./input.php">Create Article</a>
			</div>
			<div class="clear"></div>
			<?php
				$result = $mysqli->query("SELECT * FROM articles") or die($mysqli->error);
			?>
			<div class="tabel">
				<table class="table">
					<thead>
						<tr>
							<th class="title">Title</th>
							<th class="date">Date Added</th>
							<th colspan="2">Action</th>
						</tr>
					</thead>

					<?php while($row = $result->fetch_assoc()): ?>
						<tr>
							<td><?php echo $row['title']; ?></td>
							<td><?php echo $row['tanggal']; ?></td>
							<td>
								<a href="input.php?edit=<?php echo $row['id']; ?>" class="btn edit">Edit</a>
								<a href="../process.php?delete=<?php echo $row['id']; ?>" class="btn danger">Delete</a>
							</td>
						</tr>
					<?php endwhile; ?>
				</table>
			</div>
		</div>
	</div>

	<footer id="main-footer">
		<p>2020 &copy; Tsaqif Ammar</p>
	</footer>
	<script type="text/javascript" src="./script/script.js"></script>
</body>
</html>