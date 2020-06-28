<?php
//Include file koneksi ke database
include "koneksi.php";

//menerima nilai dari kiriman form pendaftaran
$username=$_POST["username"];
$password=($_POST["password"]); //untuk password digunakan enskripsi md5

if (isset($_POST['submit'])) {
	$userid = trim($_POST['username']);
	$userpas = trim($_POST['password']);

		if ($userid == "" && $userpas == "") {
			echo 'Harap Isi Username Dan Pasword Anda';
		}
}


//Query input menginput data kedalam tabel anggota
  $sql="insert into tbuser (id,username,password) values
		('','$username','$password')";

//Mengeksekusi/menjalankan query diatas	
  $hasil=mysqli_query($koneksi,$sql);

//Kondisi apakah berhasil atau tidak
  if ($hasil) {
	echo "Berhasil Daftar";
	exit;
  }
else {
	echo "";
	exit;
}  

?>