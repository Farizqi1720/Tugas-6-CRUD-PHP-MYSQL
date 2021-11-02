<!DOCTYPE html>
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
	
	<body id="page-top">
		 <header class="masthead">
            <div class="container">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end">
					<h3 style="margin-top: 15px; color:white">Edit Data Mahasiswa</h3></center>
					<?php
					  include 'DataBase.php';
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
							$i = explode('.',$data['foto']);
							$ekstensi = strtolower(end($i));
							$file_tmp = $_FILES['foto']['tmp_name'];
							$angka_acak = rand(1,999);
							$foto_baru = $angka_acak.'-'.$data['foto'];
								$data['baru'] = $foto_baru;
								move_uploaded_file($file_tmp,'gambar/'.$foto_baru);
							}
							$update = $model->update($data);

							if($update){
							  echo "<script>alert('Data Diperbarui!');</script>";
							  echo "<script>window.location.href = 'Index.php';</script>";
							}else{
							  echo "<script>alert('Data Gagal Diperbarui!');</script>";
							  echo "<script>window.location.href = 'Index.php';</script>";
							}

						  }else{
							echo "<script>alert('Data Kosong!');</script>";
							header("Location: Edit.php?id=$id");
						  }
						}
					  
					
				  ?>
						<form action="" method="post" enctype="multipart/form-data">
							<div class="form-group">
								<label for="" class="text-white font-weight-bold">NIM</label>
								<input type="text" name="nim" value="<?php echo $row['nim']; ?>" class="form-control" required autocomplete="off"> </div>
							<div class="form-group">
								<label for="" class="text-white font-weight-bold">Nama Mahasiswa</label>
								<input type="text" name="namamhs" value="<?php echo $row['namamhs']; ?>" class="form-control" required autocomplete="off"> </div>
							<div class="mb-3">
								<label for="exampleInputPassword1" class="form-label text-white font-weight-bold">Jenis Kelamin</label>
								<select id="jk" class="form-select" name="jk" required>
									<option value="L" <?php if ($row[ 'jk']=="L" ): ?> selected="selected"
										<?php endif; ?>>L</option>
									<option value="P" <?php if ($row[ 'jk']=="P" ): ?> selected="selected"
										<?php endif; ?>>P</option>
								</select>
							</div>
							<div class="mb-3">
								<label for="exampleInputPassword1" class="form-label text-white font-weight-bold">Alamat</label>
								<input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $row['alamat']; ?>" required autocomplete="off"> </div>
							<div class="mb-3">
								<label for="exampleInputPassword1" class="form-label text-white font-weight-bold">Kota</label>
								<input type="text" class="form-control" id="kota" name="kota" value="<?php echo $row['kota']; ?>" required autocomplete="off"> </div>
							<div class="mb-3">
								<label for="exampleInputPassword1" class="form-label text-white font-weight-bold">Email</label>
								<input type="text" class="form-control" id="email" name="email" value="<?php echo $row['email']; ?>" required autocomplete="off"> </div>
							<div class="mb-3">
								<label for="exampleInputPassword1" class="form-label text-white font-weight-bold">Foto</label>
								<br> <img src="gambar/<?php echo $row['foto'];?>" style="width: 120px; float:left; margin-bottom:5px;">
								<input type="file" class="form-control" id="foto" name="foto" required accept="image/*">
								<p style="color: red">Ekstensi yang diperbolehkan .png | .jpg | .jpeg</p>
							</div>
							<center>
								<button type="submit" name="update" class="btn btn-primary">Save</button>
							</center>
						</form>
				</div>
			</div>
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
