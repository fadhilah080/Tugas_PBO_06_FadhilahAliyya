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

<body background="kucing.jpg">
	<nav class="navbar navbar-dark bg-dark">
		<div class="container-fluid"> <a class="navbar-brand" href="Home.php" color="red">APLIKASI CRUD DATA MAHASISWA</a> </div>
	</nav>
	<div class="container">
		<center>
			<h3 style="margin-top: 15px; color:black">Edit Data Mahasiswa</h3></center>
		<div id="wrapper">
			<div id="header">
				<div id="melengkung">
					<?php
              include 'Database.php';
              $model = new database();
              $id = $_REQUEST['id'];
              $row = $model->edit($id);

              if (isset($_POST['update'])) {
                if (isset($_POST['nim']) && isset($_POST['namamhs']) && isset($_POST['jk']) && isset($_POST['alamat']) && isset($_POST['kota']) && isset($_POST['email']) && isset($_FILES['foto'])) {
                    if (!empty($_POST['nim']) && !empty($_POST['namamhs']) && !empty($_POST['jk']) && !empty($_POST['alamat']) && !empty($_POST['kota']) && !empty($_POST['email']) && !empty($_FILES['foto'])) {       
                    $data['id'] = $id;
                    $data['nim'] = $_POST['nim'];
                    $data['namamhs'] = $_POST['namamhs'];
                    $data['jk'] = $_POST['jk'];
                    $data['alamat'] = $_POST['alamat'];
                    $data['kota'] = $_POST['kota'];
                    $data['email'] = $_POST['email'];
                    $data['foto'] = $_FILES['foto']['name'];
                    $ekstensi_boleh = array('png','jpg','jpeg');
                    $x = explode('.',$data['foto']);
                    $ekstensi = strtolower(end($x));
                    $file_tmp = $_FILES['foto']['tmp_name'];
                    $angka_acak = rand(1,999);
                    $foto_baru = $angka_acak.'-'.$data['foto'];
                        $data['baru'] = $foto_baru;
                        move_uploaded_file($file_tmp,'gambar/'.$foto_baru);
                    }
                    $update = $model->update($data);

                    if($update){
                      echo "<script>alert('Data Berhasil Diperbarui! :D');</script>";
                      echo "<script>window.location.href = 'Home.php';</script>";
                    }else{
                      echo "<script>alert('Data Gagal Diperbarui! :(');</script>";
                      echo "<script>window.location.href = 'Home.php';</script>";
                    }

                  }else{
                    echo "<script>alert('Data Kosong!');</script>";
                    header("Location: Edit.php?id=$id");
                  }
                }
              
            
          ?>
						<form action="" method="post" enctype="multipart/form-data">
							<div class="form-group">
								<label for="">NIM</label>
								<input type="text" name="nim" value="<?php echo $row['nim']; ?>" class="form-control" required autocomplete="off"> </div>
							<div class="form-group">
								<label for="">Nama Mahasiswa</label>
								<input type="text" name="namamhs" value="<?php echo $row['namamhs']; ?>" class="form-control" required autocomplete="off"> </div>
							<div class="mb-3">
								<label for="exampleInputPassword1" class="form-label">Jenis Kelamin</label>
								<select id="jk" class="form-select" name="jk" required>
									<option value="L" <?php if ($row[ 'jk']=="L" ): ?> selected="selected"
										<?php endif; ?>>L</option>
									<option value="P" <?php if ($row[ 'jk']=="P" ): ?> selected="selected"
										<?php endif; ?>>P</option>
								</select>
							</div>
							<div class="mb-3">
								<label for="exampleInputPassword1" class="form-label">Alamat</label>
								<input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $row['alamat']; ?>" required autocomplete="off"> </div>
							<div class="mb-3">
								<label for="exampleInputPassword1" class="form-label">Kota</label>
								<input type="text" class="form-control" id="kota" name="kota" value="<?php echo $row['kota']; ?>" required autocomplete="off"> </div>
							<div class="mb-3">
								<label for="exampleInputPassword1" class="form-label">Email</label>
								<input type="text" class="form-control" id="email" name="email" value="<?php echo $row['email']; ?>" required autocomplete="off"> </div>
							<div class="mb-3">
								<label for="exampleInputPassword1" class="form-label">Foto</label>
								<br> <img src="gambar/<?php echo $row['foto'];?>" style="width: 120px; float:left; margin-bottom:5px;">
								<input type="file" class="form-control" id="foto" name="foto" required accept="image/*">
								<p style="color: red">Ekstensi yang diperbolehkan .png | .jpg | .jpeg</p>
							</div>
							<center>
								<button type="submit" name="update" class="btn btn-primary">Simpan</button>
							</center>
						</form>
				</div>
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