<?php 
// 1 membuat koneksi
$koneksi = mysqli_connect("localhost","root","","fakultas");
 
// 2 Check connection
if (mysqli_connect_errno()){
	echo "yahh Connect database gagal : " . mysqli_connect_error();
}
else { 
   echo'yeyy berhasil connect'; 
}
 // 3. membaca data dari table mysql.
$sql = "SELECT * FROM mahasiswa";

// 4 tampilkan data cek apakah query bisa berjalan
$result = mysqli_query ($koneksi, $sql);
if ($result) {
    // tampilkan satu-persatu
    $row = mysqli_fetch_assoc($result) ;
   
    while (   $row = mysqli_fetch_assoc($result) ){
        echo "<br>".$row["nama"]." alamat :".$row ["alamat"];
    }
    mysqli_free_result($result);
}
?>