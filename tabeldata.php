<?php 
	include("config.php");

	$datatabel= query("SELECT * FROM waktutempuh");
?>


<!DOCTYPE html>
<html>
<head>
	<title>Progam Menghitung Waktu Sampai</title>

<!--BOOTSTRAP-->
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
<!--/BOOTSTRAP-->

</head>
<body>

<!--NAVBAR-->
	<nav class="navbar navbar-expand-lg fixed-top text-white" style="background-color: #2D3E50">
	  <div class="container">
	    <a class="navbar-brand">
	    	<strong>Sistem Informasi'2019</strong>
	    </a>
	  </div>
	</nav>

<!--/NAVBAR-->



<section id="programinput" class="text-white py-5" style="background-color: #18BB9C">
<div class="container">

	<div class="row">
		<div class="col-sm-12 mt-5" id="judul" style="text-align: center;">
			<h2>Program Menghitung Waktu Sampai</h2>
			<hr style="max-width: 600px;">
			<p class="mx-5"style="font-color: #4F5356;">Program ini ditujukan kepada kalian yang hendak berpergian namun malas menghitung sendiri berapa lama waktu yang dibutuhkan untuk sampai ke-tujuan. Semoga bermanfaat :)</p>
		</div>
	</div>
</div>
</section>

<section id="forminput">
<div class="container">
	<div class="row justify-content-center">
			<div class="col-sm-12 my-5" id="tabel">
				<h4>Data Hasil Perhitungan</h4>
				
				<a class="row justify-content-end mr-1" href="index.php"><strong>Hitung Lagi Waktu Sampai</strong></a>

				<div class="table-responsive-sm">		
				<table class="table table-bordered my-3" >
					<thead>
					    <tr>
						    <th scope="col">No</th>
						    <th scope="col">Aksi</th>
						    <th scope="col">Nama</th>
						    <th scope="col">Jarak <br><small class="text-muted">(Kilometer)</small></th>
						    <th scope="col">Kecepatan <br><small class="text-muted">(Kilometer/Jam)</smal></th>
						    <th scope="col">Waktu Berangkat <br><small class="text-muted">(Jam:Menit)</small></th>
						    <th scope="col">Lama Macet<br><small class="text-muted">(Menit)</small></th>
						    <th scope="col">Lama Istirahat <br><small class="text-muted">(Menit)</small></th>
						    <th scope="col">Waktu Sampai<br><small class="text-muted">(Jam:Menit)</small></th>
					    </tr>
					</thead>
					<tbody>

						<?php $i = 1; ?>
						<?php foreach($datatabel as $row) : ?>
					    <tr>

						    <th scope="row"><?= $i;  ?></th>
						    <td>
						    	<a href="hapus.php?id= <?= $row["id"]; ?>" onclick=" return confirm('Hapus Data dari Program?');" >Hapus</a>
						    </td>
						    <td><?= $row["nama"]; ?></td>
						    <td><?= $row["jarak"]; ?></td>
						    <td><?= $row["kecepatan"]; ?></td>
						    <td><?= $row["w_berangkat"]; ?></td>
						    <td><?= $row["w_macet"]; ?></td>
						    <td><?= $row["w_istirahat"]; ?></td>
						    <td><?= $row["w_sampai"]; ?></td>

					    </tr>
					    <?php $i++;  ?>
						<?php endforeach;  ?>
					</tbody>
				</table>
				</div>	


			</div>
		</div>

</div>
</section>









<!--FOOTER-->
	<nav class=" sticky-bottom text-white py-2" style="background-color: #243141">
	  <div class="container text-center">
	       	<small>Copyright &copy; 2019 - Powered by DDA</small>
	   </div>
	</nav>

<!--/FOOTER-->



<!--BOOTSTRAP-->
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="asset/js/bootstrap.min.css"></script>
<!--/BOOTSTRAP-->
</body>
</html>