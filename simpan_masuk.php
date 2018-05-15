<?php
require "config.php";

				$allowed_ext	= array('doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx', 'pdf', 'zip' , 'gif' , 'png' , 'jpg');
				$file_name		= $_FILES['file']['name'];
				$file_name_exp 	= explode(".", $file_name);
				$file_ext		= strtolower(array_pop($file_name_exp));
				// $file_ext		= strtolower(end(explode('.', $file_name)));
				$file_size		= $_FILES['file']['size'];
				$file_tmp		= $_FILES['file']['tmp_name'];
				
				$nama			= $_POST['nama'];
				$tgl			= date("Y-m-d");

$b=$_POST['no_masuk'];
$c=$_POST['pengirim'];
$d=$_POST['kategori_masuk'];
$e=$_POST['ket_masuk'];

				if(in_array($file_ext, $allowed_ext) === true){
					if($file_size < 10044070){
						$lokasi = 'files/'.$nama.'.'.$file_ext;
						move_uploaded_file($file_tmp, $lokasi);
						$in = mysql_query("INSERT INTO surat_masuk VALUES(NULL, '$tgl', '$nama', '$file_ext', '$file_size', '$lokasi' , '$b' , '$c' , '$d' , '$e')");
						if($in){
							echo '<div class="ok">SUCCESS: File berhasil di Upload!</div>';
						}else{
							echo '<div class="error">ERROR: Gagal upload file!</div>';
						}
					}else{
						echo '<div class="error">ERROR: Besar ukuran file (file size) maksimal 1 Mb!</div>';
					}
				}else{
					echo '<div class="error">ERROR: Ekstensi file tidak di izinkan!</div>';
				}
			?>

