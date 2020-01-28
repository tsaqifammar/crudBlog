<!doctype html>
<html lang="en">
<head>
	 <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="../styles/style-input.css">
	<title>CRUD 999Stories</title>
</head>
<body>
	<?php require_once '../process.php'; ?>
	<nav>
		<div class="container">
			<div class="upper-nav">
				<h1>999Stories</h1>
			</div>
		</div>
	</nav>
	<div class="kiddo"> 
		<div class="container">
			<form action="../process.php" method="POST">
				<input type="hidden" name="id" value="<?php echo $id ?>">
				<div class="form-group">
					<label for="">Title</label>
					<input type="text" name="title" value="<?php echo $title?>" placeholder="Insert a title here">
				</div>
				<div class="form-group">
					<label for="desc">Description</label>
					<textarea name="desk" id="desk" rows="3"><?php echo $desk?></textarea>
				</div>
				<div class="form-group">
					<label for="isi">Article</label>
					<textarea class="isi" name="isi" id="isi" rows="25" cols="100"><?php echo $isi?></textarea>
				</div>
				
				<div class="form-group">
					<?php if ($update == false): ?>
						<button type="submit" name="publish">Publish</button>
					<?php else: ?>
						<button type="submit" name="update">Update</button>
					<?php endif ?>
				</div>
			</form>
		</div>
	</div>

	<div class="back-button">
		<div class="container">
			<a href="crud-page.php">< Back</a>
		</div>
	</div>

	<footer id="main-footer">
		<p>2020 &copy; Tsaqif Ammar</p>
	</footer>
	<script type="text/javascript" src="./script/script.js"></script>
</body>
</html>