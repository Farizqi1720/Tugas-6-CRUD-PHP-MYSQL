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
        	<?php
        include 'DataBase.php';
        $db = new database();
        ?>
		 <header class="masthead">
            <div class="container">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end">
					<h3 style="margin-top: 28px; color:white">Data Mahasiswa</h3></center> <a href="add.php" class="btn btn-success" style="margin-bottom: 8px;margin-right:-35px; float:right">+</a>
						<table class="table table-striped text-white font-weight-bold">
							<tr>
								<th class="text-white font-weight-bold">Id</th>
								<th class="text-white font-weight-bold">Nim</th>
								<th class="text-white font-weight-bold">Nama Mahasiswa</th>
								<th class="text-white font-weight-bold">Jenis Kelamin</th>
								<th class="text-white font-weight-bold">Alamat</th>
								<th class="text-white font-weight-bold">Kota</th>
								<th class="text-white font-weight-bold">Email</th>
								<th class="text-white font-weight-bold">Foto</th>
								<th class="text-white font-weight-bold">Opsi</th>
							</tr>
							<?php
							foreach($db->tampil_data() as $i){ ?>
								<tr class="text-white font-weight-bold">
									<td class="text-white font-weight-bold">
										<?php echo $i['id'];?>
									</td>
									<td class="text-white font-weight-bold">
										<?php echo $i['nim'];?>
									</td>
									<td class="text-white font-weight-bold">
										<?php echo $i['namamhs'];?>
									</td>
									<td class="text-white font-weight-bold">
										<?php echo $i['jk'];?>
									</td>
									<td class="text-white font-weight-bold">
										<?php echo $i['alamat'];?>
									</td>
									<td class="text-white font-weight-bold">
										<?php echo $i['kota'];?>
									</td>
									<td class="text-white font-weight-bold">
										<?php echo $i['email'];?>
									</td>
									<td style="text-align: center;"><img src="gambar/<?php echo $i['foto'];?>" style="width: 120px; "></td>
									<td> <a href="Edit.php?id=<?php echo $i['id'];?>" class="btn btn-outline-warning">Edit</a> <a href="hapus.php?id=<?php echo $i['id'];?>" class="btn btn-outline-danger">Hapus</a> </td>
								</tr>
								<?php
    }
    ?>
						</table>
					</div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- SimpleLightbox plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
