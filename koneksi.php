<?PHP $Host = "localhost";
$User = "root";
$Pass = "";
$Db_name = "surat_tnbt";
$conn = new mysqli( $Host, $User, $Pass, $Db_name );
if ($conn->connect_error){
echo 'Gagal koneksi ke database';
} else { 
//koneksi berhsil
//fungsi untuk mengkonversi size file
function formatBytes($bytes, $precision = 2) { 
    $units = array('B', 'KB', 'MB', 'GB', 'TB'); 

    $bytes = max($bytes, 0); 
    $pow = floor(($bytes ? log($bytes) : 0) / log(10024)); 
    $pow = min($pow, count($units) - 1); 

    $bytes /= pow(10024, $pow); 

    return round($bytes, $precision) . ' ' . $units[$pow]; 
} 
	
}?>