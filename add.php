<?php
 include 'DataBase.php';
 $db = new database();
 $insert = $db->insert();
?>
<!doctype html>
	<html lang="en">
	 <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Tabel CRUD Mahasiswa</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- SimpleLightbox plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
	
	<body>
		<nav class="navbar navbar-dark bg-dark">
			<div class="container-fluid"> <a class="navbar-brand" href="Index.php">CRUD Mahasiswa</a> </div>
		</nav>
		<header class="masthead">
            <div class="container px-4 px-lg-5 h-100">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end">
						<h3 style="margin-top: 15px; color:white">Tambah Data</h3></center>
						<form action="" method="post" enctype="multipart/form-data">
							<div class="mb-3">
								<label for="exampleInputEmail1" class="form-label text-white">NIM</label>
								<input type="text" class="form-control" id="nim" name="nim" aria-describedby="emailHelp" required autocomplete="off"> </div>
							<div class="mb-3">
								<label for="exampleInputPassword1" class="form-label text-white">Nama Mahasiswa</label>
								<input type="text" class="form-control" id="namamhs" name="namamhs" required autocomplete="off"> </div>
							<div class="mb-3">
								<label for="exampleInputPassword1" class="form-label text-white">Jenis Kelamin</label>
								<select id="jk" class="form-select" name="jk" required>
									<option value="">- Jenis Kelamin -</option>
									<option value="L">L</option>
									<option value="P">P</option>
								</select>
							</div>
							<div class="mb-3">
								<label for="exampleInputPassword1" class="form-label text-white">Alamat</label>
								<input type="text" class="form-control" id="alamat" name="alamat" required autocomplete="off"> </div>
							<div class="mb-3">
								<label for="exampleInputPassword1" class="form-label text-white">Kota</label>
								<input type="text" class="form-control" id="kota" name="kota" required autocomplete="off"> </div>
							<div class="mb-3">
								<label for="exampleInputPassword1" class="form-label text-white">Email</label>
								<input type="text" class="form-control" id="email" name="email" required autocomplete="off"> </div>
							<div class="mb-3">
								<label for="exampleInputPassword1" class="form-label text-white">Foto</label>
								<input type="file" class="form-control" id="foto" name="foto" accept="image/*">
								<p style="color: red">Ekstensi yang diperbolehkan .png | .jpg | .jpeg</p>
							</div>
							<center>
								<button type="submit" name="submit" class="btn btn-primary">Save</button>
							</center>
						</form>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- SimpleLightbox plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>