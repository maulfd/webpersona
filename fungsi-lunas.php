<?php

	include "koneksi.php";
?>

<?php
	
	$username = $_POST['ID_pemesan'];

	if(empty($username)){

		echo "Anda Belum Mengisi ID />
		<a href=javascript:history.go(-1)><b>Ulangi Lagi</b>";
	}
	else{

		mysql_query("update daftar_pembeli set Status_pembayaran='Lunas' where ID_pemesan = '$username'") or die(mysql_error());
		header("location:main-admin.php");
	}
?>