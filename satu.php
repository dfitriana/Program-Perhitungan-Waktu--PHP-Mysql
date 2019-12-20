<?php
include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['submit'])){

	//ambil data dari folmulir
	$nama = htmlspecialchars($_POST['nama']);
	$jarak = $_POST['jarak'];
	$kecepatan = $_POST['kecepatan'];
	$wberangkatjam = $_POST['wberangkatjam'];
	$wberangkatmenit = $_POST['wberangkatmenit'];
	$wmacet = $_POST['wmacet'];
	$wistirahat = $_POST['wistirahat'];

	//menyatukan jam&menit dari waktu berangkat--------------------
		$wberangkat= $wberangkatjam.":".$wberangkatmenit;
	//------------------------------------------

	//rumus-nya ya *******************************************
		$tnormal = ($jarak/$kecepatan)*60; // waktu tempuh normal (menit)		
		$lama_perjalanan = $tnormal + $wmacet + $wistirahat;// (menit)
		$waktujamfloat= $lama_perjalanan/60;
		$waktujam= floor($waktujamfloat);
		$waktumenit= $lama_perjalanan%60;


		//lama perjalanan [h:i] = $waktujam:$waktumenit
		
		$jam_sampai= $wberangkatjam+$waktujam;
		$menit_sampai= $wberangkatmenit+$waktumenit;
		while($menit_sampai>=60){
			$jam_sampai=$jam_sampai+1;
			$menit_sampai=$menit_sampai-60;
		}
	//*******************************************

	//menyatukan jam&menit dari waktu sampai--------------------
		//$jamakhir = floor($jam_sampai);
		$wsampai= $jam_sampai.":".$menit_sampai;
		
		//echo "nilainya".$wsampai;die;
	//------------------------------------------

	//buat query
	$sql = "INSERT INTO waktutempuh(nama, jarak, kecepatan, w_berangkat, w_macet, w_istirahat, w_sampai) VALUE ('$nama', '$jarak', '$kecepatan', '$wberangkat', '$wmacet', '$wistirahat', '$wsampai')";
	$query = mysqli_query($conn, $sql);

	// apakah query simpan berhasil?
		if( $query ) {
			// kalau berhasil alihkan ke halaman index.php dengan status=sukses
			header('Location: index.php?status=sukses');
		} else {
			// kalau gagal alihkan ke halaman indek.ph dengan status=gagal
			header('Location: index.php?status=gagal');
		}


}else{
	die("akses dilarang...");
}
?>
