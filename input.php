<?php
 include 'Database.php';
 $db = new database();
 $insert = $db->insert();
?>
	<!doctype html>
	<html lang="en">

	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<link href="hiasan.css" rel="stylesheet" type="text/css" />
		<title>CRUD MAHASISWA</title>
	</head>

	<body background="kucing.jpg">
		<nav class="navbar navbar-dark bg-dark">
			<div class="container-fluid"> <a class="navbar-brand" href="Home.php">APLIKASI CRUD DATA MAHASISWA</a> </div>
		</nav>
		<div class="container">
			<center>
				<h3 style="margin-top: 15px; color:black">Tambah Data Mahasiswa</h3></center>
			<div id="wrapper">
				<div id="header">
					<div id="melengkung">
						<form action="" method="post" enctype="multipart/form-data">
							<div class="mb-3">
								<label for="exampleInputEmail1" class="form-label">NIM</label>
								<input type="text" class="form-control" id="nim" name="nim" aria-describedby="emailHelp" required autocomplete="off"> </div>
							<div class="mb-3">
								<label for="exampleInputPassword1" class="form-label">Nama Mahasiswa</label>
								<input type="text" class="form-control" id="namamhs" name="namamhs" required autocomplete="off"> </div>
							<div class="mb-3">
								<label for="exampleInputPassword1" class="form-label">Jenis Kelamin</label>
								<select id="jk" class="form-select" name="jk" required>
									<option value="">Pilih</option>
									<option value="L">L</option>
									<option value="P">P</option>
								</select>
							</div>
							<div class="mb-3">
								<label for="exampleInputPassword1" class="form-label">Alamat</label>
								<input type="text" class="form-control" id="alamat" name="alamat" required autocomplete="off"> </div>
							<div class="mb-3">
								<label for="exampleInputPassword1" class="form-label">Kota</label>
								<input type="text" class="form-control" id="kota" name="kota" required autocomplete="off"> </div>
							<div class="mb-3">
								<label for="exampleInputPassword1" class="form-label">Email</label>
								<input type="text" class="form-control" id="email" name="email" required autocomplete="off"> </div>
							<div class="mb-3">
								<label for="exampleInputPassword1" class="form-label">Foto</label>
								<input type="file" class="form-control" id="foto" name="foto" accept="image/*">
								<p style="color: red">Ekstensi yang diperbolehkan .png | .jpg | .jpeg</p>
							</div>
							<center>
								<button type="submit" name="submit" class="btn btn-primary">Simpan</button>
							</center>
						</form>
						<!-- Optional JavaScript; choose one of the two! -->
						<!-- Option 1: Bootstrap Bundle with Popper -->
						<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
						<!-- Option 2: Separate Popper and Bootstrap JS -->
						<!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
					</div>
	</body>

	</html>