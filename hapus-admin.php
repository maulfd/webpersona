<?php

	@session_start();
    @error_reporting(0);
	include "koneksi.php";
	include "fungsi_waktu.php";
?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Persona Admin - Administrator</title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">  
    <link rel="stylesheet" type="text/css" href="assets/css/hapus-admin.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Bootstrap theme -->
    <link href="assets/css/bootstrap-theme.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="Scripts/fancybox/jquery.fancybox-1.3.1.css" media="screen" />

 </head>
 <body>

    <div class="row">
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><center>
                    <span>  Administrator  <br /></span>
                    <span>Daftar Pemesan</span>
                </center></li>
            </ul>
        </div>
    </div>
    <div class="clearfix"></div>
 
 <div class = "row">
    <div class = "col-4">
        <div class = "input">
        <div class = "box">
            <div class = "btn-group-vertical">

                <span><center>Dashboard</center></span>
                <div>
                    <a href = "main-admin.php">
                        <input type = "submit" class = "btnbtn-defaul" value="Daftar ">
                    </a>
                </div>
                <div>
                    <a href = "hapus-admin.php">
                        <input type = "submit" class = "btnbtn-defaul" value="Ubah Status">
                    </a>
                </div>
            </div>
        </div>
        </div>
    </div>
 <div id="formholder" class="col-8" style="margin-top: -;">
    <form id="form1" name="form1" method="POST" action="fungsi_hapus.php">
        <div class = "input">
            <div class = "box2">

                <table class = "table">
                <thead>
                    <tr>
                        <th>ID Pemesan</th>
                        <th>Nama</th>
                        <th>Nomor Kontak/Email</th>
                        <th>Jumlah Barang</th>
                        <th>Nomor Rekening</th>
                        <th>Alamat</th>
                        <th>Tanggal</th>
                        <th>Status Pembayaran
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php


                            $sql = mysql_query("select * from daftar_pembeli") or die (mysql_error());
                            while($r = mysql_fetch_array($sql)){
                                echo "<tr>"
                            ?>
                             <td><center><?php echo "$r[ID_pemesan]"?></center></td>
                            <td><center><?php echo "$r[Nama]"?></center></td>
                            <td><center><?php echo "$r[Nomor_Kontak_Email]"?></center></td>
                            <td><center><?php echo "$r[Jumlah_Barang]"?></center></td>
                            <td><center><?php echo "$r[Nomor_Rekening]"?></center></td>
                            <td><center><?php echo "$r[Alamat]"?></center></td>
                            <td><center><?php echo "$r[Tanggal]"?></center></td>
                            <td><center><?php echo "$r[Status_pembayaran]"?></center></td>
                            <?php
                                echo"</tr>";
                            }
                        ?>
                    </tr>
                </tbody>
            </table>
                <div>
                    <input name = "ID_pemesan" type = "text" id = "ID_pemesan" width="200px" placeholder= "Masukan ID Pemesan" />
                    
                    <input name = "login" type = "submit" value = "Hapus" class = "btn" />
                </div>
            </div>
        </div>
    </form>
 </div>

<div class="clearfix"></div>
</div>
<div class="clearfix"></div>


 <div class="footerBottomSection">
        <div class="container">
            <h2><center>&copy; Persona 3</center></h2>
        </div>
 </div>
 </body>
</html>