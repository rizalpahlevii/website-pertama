<!DOCTYPE html>
<html>
<head>
	<title>My Website</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<script type="text/javascript" src="assets/js/jquery-1.11.3.min.js"></script>
</head>
<body>
	<div class="box">
		<div class="header">
			<h1>My Website</h1>
			<h5>RizalPahlevi</h5>
		</div>


		<div class="navigasi">
			<ul>
				<li><a href="index.php?p=home">Home</a></li>
				<li><a href="index.php?p=about">About</a></li>
				<li><a href="index.php?p=artikel">Artikel</a></li>
				<li><a href="index.php?p=contact">Contact</a></li>
			</ul>
		</div>


		<div class="slide">
			<div class="slideshow">
				<img src="assets/image/82.jpg">
				<img src="assets/image/6.jpg">
				<img src="assets/image/30.jpg">
				<img src="assets/image/37.jpg">
			</div>
		</div>


		<div class="content">
			<?php 
				if (empty($_GET['p'])) {
					include "content/home.php";
				}else{
					$ambil = $_GET['p'];
					if ($ambil == 'home') {
						include "content/home.php";
						echo "<script>$('.slide').show()</script>";
					}else{
						include "content/$ambil.php";
						echo "<script>$('.slide').hide()</script>";
					}
				}
			 ?>
		</div>


		<div class="sidebar">
			
			<div class="k-profil">
				<h2>Profil</h2>
				<img src="assets/image/profil.jpg">
				<table class="tabel1" align="center">
					<tr>
						<td>NIS</td>
						<td>:</td>
						<td>11700618</td>
					</tr>
					<tr>
						<td>Nama</td>
						<td>:</td>
						<td>Muhammad Rizal Pahlevi</td>
					</tr>
					<tr>
						<td>Alamat</td>
						<td>:</td>
						<td>Mojo Lembah</td>
					</tr>

				</table>
			</div>
		</div>


		<div class="footer">

			<p>Copyright &copy; RizalPahlevi</p>
		</div>

	</div>
</body>
</html>