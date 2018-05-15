<?php
require "koneksi2.php";
$id=$_POST['id'];
$a=$_POST['nama_file'];
$b=$_POST['no_masuk'];
$c=$_POST['pengirim'];
$d=$_POST['kategori_masuk'];

// Proses ubah data pada tabel surat masuk
$sql = "UPDATE surat_masuk SET
nama_file='$a',
no_masuk='$b',
pengirim='$c',
kategori_masuk='$d'
WHERE id ='$id'";
$hasil=mysql_query($sql);
// ========================================================== //
if ($hasil) {
echo "<script language='javascript'>
alert('Proses Ubah Data Berhasil');
window.open('daftar_surat_masuk.php','_top')
</script>";
}else{
echo "<script language='javascript'>
alert('Proses Ubah Data Gagal');
window.open('daftar_surat_masuk.php','_top')
</script>";
}
?>