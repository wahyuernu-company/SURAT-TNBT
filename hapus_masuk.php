<?php
require "koneksi2.php";
$id=$_GET['id'];
$sql="DELETE FROM surat_masuk WHERE id='$id'";
$hasil=mysql_query($sql);
if($hasil){
echo "<script language = 'javascript'>
alert('Proses Hapus Data Berhasil');
window.open('daftar_surat_masuk.php','_top');
</script>";
} else {
echo "<script language = 'javascript'>
alert('Proses Hapus Data Gagal');
window.open('daftar_surat_masuk.php','_top');
</script>";
}
?>