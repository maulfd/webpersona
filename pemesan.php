<?php
	
	include "koneksi.php";
	include "fungsi_waktu.php";
?>

<?php
	
	$Nama = $_POST['Nama_Lengkap'];
	$Nomor_Kontak = $_POST['Nomor_Kontak'];
	$Jumlah = $_POST['Jumlah_Barang'];
	$Nomor_Rekening = $_POST['Nomor_Kontak'];
	$Alamat = $_POST['Alamat'];
	$Status="Belum Lunas";

	if(empty($Nama)){

		echo "Anda Belum Mengisi Nama  />
		<a href=javascript:history.go(-1)><b>Ulangi Lagi</b>";
	}
	else if(empty($Nomor_Kontak)){

		echo "Anda Belum Mengisi Nomor Kontak  />
		<a href=javascript:history.go(-1)><b>Ulangi Lagi</b>";
	}
	else if(empty($Jumlah)){

		echo "Anda Belum Mengisi Email />
		<a href=javascript:history.go(-1)><b>Ulangi Lagi</b>";
	}
	else if(empty($Nomor_Rekening)){

		echo "Anda Belum Mengisi Nomor Rekening />
		<a href=javascript:history.go(-1)><b>Ulangi Lagi</b>";
	}
	else if(empty($Alamat)){

		echo "Anda Belum Mengisi Alamat />
		<a href=javascript:history.go(-1)><b>Ulangi Lagi</b>";
	}
	else{

		mysql_query("insert into daftar_pembeli(Nama, Nomor_Kontak_Email, Jumlah_Barang, Nomor_Rekening, Alamat, Tanggal, Status_pembayaran) values ('$Nama', '$Nomor_Kontak', '$Jumlah', 
			'$Nomor_Rekening', '$_POST[Alamat]', '$tanggal_sekarang', '$Status')") or die (mysql_error());
		header("location:respon-page.php");
	}
?> 