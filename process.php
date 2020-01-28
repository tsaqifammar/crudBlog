<?php

include 'koneksi.php';

$title = "";
$desk = "";
$isi = "";
$id = 0;
$update = false;

if (isset($_POST['publish'])){
	$title = $_POST['title'];
	$desk = $_POST['desk'];
	$isi = $_POST['isi'];
	$tgl = date("d F Y");

	$mysqli->query("INSERT INTO articles (title, desk, isi, tanggal) VALUES('$title', '$desk', '$isi', '$tgl')") or die($mysqli->error);

	header("location: ./crud/crud-page.php");
}

if (isset($_GET['delete'])){
	$id = $_GET['delete'];
	$mysqli->query("DELETE FROM articles WHERE id=$id") or die($mysqli->error());

	header("location: ./crud/crud-page.php");
}

if (isset($_GET['edit'])){
	$id = $_GET['edit'];
	$update = true;
	$result = $mysqli->query("SELECT * FROM articles WHERE id=$id") or die($mysqli->error());
	if (count($result) == 1){
		$row = $result->fetch_array();
		$title = $row['title'];
		$desk = $row['desk'];
		$isi = $row['isi'];
	}
}

if (isset($_POST['update'])){
	$id = $_POST['id'];
	$title = $_POST['title'];
	$desk = $_POST['desk'];
	$isi = $_POST['isi'];

	$mysqli->query("UPDATE articles SET title='$title', desk='$desk', isi='$isi' WHERE id=$id") or die($mysqli->error);

	header("location: ./crud/crud-page.php");
}