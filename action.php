<?php

if(isset($_GET['p'])) {
    
    if ($_GET['p'] == 'tampil') { // standar

        echo $_POST['nama'];
        echo "<br/>";
        echo $_POST['password'];

    } else if ($_GET['p'] == "pesan") { // ada pesannya
        echo "Hai ".$_POST['nama'] ;
        echo "<br/>";
        echo "password anda adalah ".$_POST['password'];

    } else if ($_GET['p'] == "nama") { // tambahan error
    
        if (!empty( $_POST['nama'])) {
            echo $_POST['nama'];
        } else {
            echo "nama belum dimasukan";
        }

        echo "<br/>";

        if (!empty( $_POST['password'])) {
            echo $_POST['password'];
        } else {
            echo "silahkan masukkan password";
        }
    }
     else if ($_GET['p'] == "gambar") { // untuk gambar
        $size = getimagesize($_FILES['berkas']['tmp_name']); // mengambil size
        $img = "data:".$size['mime'].";base64,".
                 base64_encode(file_get_contents($_FILES['berkas']['tmp_name'])); // menampilkan gambar
        
        echo "<image src='".$img."' width='480'>";
    }

}  else {
    echo "Anda tidak boleh mengakses halaman ini";
}