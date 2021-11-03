<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
	<link href="hiasan.css" rel="stylesheet" type="text/css" />
	<title>CRUD MAHASISWA</title>
</head>

<body background="gambar/wendy.jpg">
	<nav class="navbar navbar-dark bg-dark">
		<div class="container-fluid"> <a class="navbar-brand" href="Home.php">APLIKASI CRUD DATA MAHASISWA</a> </div>
	</nav>
	<!-- <body background="kucing.jpg"> -->
	<?php
        include 'Database.php';
        $db = new database();
        ?>
		<div class="container">
			<center>
				<h3 style="margin-top: 15px; color:black">Data Mahasiswa</h3></center> <a href="Input.php" class="btn btn-success" style="margin-bottom: 5px;margin-right:7px; float:right">Input Data</a>
			<div id="wrapper">
				<div id="header">
					<div id="melengkung">
						<table class="table table-striped table-hover">
							<tr>
								<th>Id</th>
								<th>Nim</th>
								<th>Nama Mahasiswa</th>
								<th>Jenis Kelamin</th>
								<th>Alamat</th>
								<th>Kota</th>
								<th>Email</th>
								<th>Foto</th>
								<th>Opsi</th>
							</tr>
							<?php
    foreach($db->tampil_data() as $x){ ?>
								<tr>
									<td>
										<?php echo $x['id'];?>
									</td>
									<td>
										<?php echo $x['nim'];?>
									</td>
									<td>
										<?php echo $x['namamhs'];?>
									</td>
									<td>
										<?php echo $x['jk'];?>
									</td>
									<td>
										<?php echo $x['alamat'];?>
									</td>
									<td>
										<?php echo $x['kota'];?>
									</td>
									<td>
										<?php echo $x['email'];?>
									</td>
									<td style="text-align: center;"><img src="gambar/<?php echo $x['foto'];?>" style="width: 120px; "></td>
									<td> <a href="Edit.php?id=<?php echo $x['id'];?>" class="btn btn-outline-warning">Edit</a> <a href="Delete.php?id=<?php echo $x['id'];?>" class="btn btn-outline-danger">Hapus</a> </td>
								</tr>
								<?php
    }
    ?>
						</table>
					</div>
					<!-- Optional JavaScript; choose one of the two! -->
					<!-- Option 1: Bootstrap Bundle with Popper -->
					<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
					<!-- Option 2: Separate Popper and Bootstrap JS -->
					<!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>