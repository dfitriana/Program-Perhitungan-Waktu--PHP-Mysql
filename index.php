<?php 
	include("config.php");
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Kapan Kamu Sampai?</title>

<!--BOOTSTRAP-->
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!--<link rel="stylesheet" href="asset/css/bootstrap.min.css">-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<!--/BOOTSTRAP-->

<!--CSS EKSTERNAL
	<link rel="stylesheet" href="css.css" type="text/css"/> -->


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
		
		<div class="col-sm-6 py-5" id="form">
			<h4 class="mb-3">Kapan kamu akan sampai?</h4>
			<form action="satu.php" method="post">
				<div class="form-group">
					<label for="name">Nama </label>
					<input type="text" name="nama" id="name" placeholder="Masukkan nama" class="form-control" autocomplete="off" required> <!--"required" digunakan agar form wajib diisi oleh user-->
				</div>

				<div class="form-group">
					<label for="jarak">Jarak Kota 
					<small class="text-muted">(Kilometer)</small>
					</label>
					<input type="number" class="form-control" name="jarak" id="jarak" placeholder="Masukkan jarak antar kota" required>
				</div>

				<div class="form-group">
					<label for="kecepatan">Kecepatan Rata-rata 
					<small class="text-muted">(Kilometer/Jam)</small>
					</label>
					<input type="number" class="form-control" name="kecepatan" id="kecepatan" placeholder="Masukkan kecepatan rata-rata" required>
				</div>

				<div class="form-group">
					<label for="wberangkat">Pukul Berapa Berangkat?</label>
					<div class="row">
						<div class="col-sm-6 mb-1">
							<input type="number" min="1" max="24" name="wberangkatjam" id="wberangkat" for="wberangkatjam" class="form-control" placeholder="1-24" required>
							<small class="text-muted" id="wberangkatjam">Jam</small>
						</div>
						<div class="col-sm-6 mb-1">
							<input type="number" min="0" max="59" name="wberangkatmenit" id="wberangkat" for="wberangkatmenit" class="form-control" placeholder="0-59" required>
							<small class="text-muted" id="wberangkatmenit">Menit</small>
						</div>
					</div>
				</div>

				<div class="form-group">
					<label for="wmacet">Berapa Lama Mengalami Kemacetan?
					<small class="text-muted">(Menit)</small>
					</label>	
					<input type="number" name="wmacet" id="wmacet" class="form-control" placeholder="Masukkan lama macet" required>	
				</div>

				<div class="form-group">
					<label for="wistirahat">Berapa Lama Istirahat?
					<small class="text-muted">(Menit)</small>
					</label>
					<input type="number" name="wistirahat" id="wistirahat" class="form-control" placeholder="Masukkan lama istirahat" required>
				</div>

				<button type="submit" name="submit" class="btn btn-primary">Kirim</button>
			</form>

		</div>	



	<?php if(isset($_GET['status'])): ?>
			<?php
				if($_GET['status'] == 'sukses'){
					echo "
						<script>
							alert('Input Berhasil!');
							document.location.href = 'tabeldata.php';
						</script>
					";

				} else {
					echo "
						<script>
							alert('Input Berhasil!');
							document.location.href = 'tabeldata.php';
						</script>
					";
				}
			?>
		<?php endif; ?>
	 
	
<!--set bootstrapnya belum-->
</div>
</section>


<!-- ************************************ -->

	




<!--belum-->









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
    <!--<script src="asset/js/bootstrap.min.css"></script>-->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<!--/BOOTSTRAP-->
</body>
</html>
