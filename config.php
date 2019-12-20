<?php

//koneksi ke database
$conn= mysqli_connect("localhost", "root", "", "perhitunganwaktu"); //nama_host(server), user, password, nama_database

if(!$conn){
	die("Gagal terhubung dengan database". mysqli_connect_error());
}


//function untuk menampilkan tabel
function query($query){
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while($row = mysqli_fetch_assoc($result) ){
		$rows[] = $row ;
	}
	return $rows;
}




function hapus($id){
	global $conn;
	mysqli_query($conn, "DELETE FROM waktutempuh WHERE id =$id");


	return mysqli_affected_rows($conn);
}

?>