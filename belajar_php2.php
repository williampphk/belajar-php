<?php

//  $nama = "William";

// // Perulangan

// $no = 9;
// for ($i=0; $i<$no; $i++) {
//     $n = $i + 1;
//     echo $n." ".$nama."<br/>";
// }

// $no = 9;
// $i = 0;

// while ($i < $no) {
//      $n = $i + 1;
//     echo $n." ".$nama."<br/>";
//     $i++;
// }



// $no = 9;
// $i = 0;

// do {
//     $n = $i + 1;
//     echo $n." ".$nama."<br/>";
//     $i++;
// } while ($i < $no)


// $motor = array('RX-king', 'CBR-150', 'KLX', 'CRF', 'Vixion', 'harley davidson');

// $i = 0;
// while ($i < count($motor)) {
//     echo $motor[$i]."<br>";
//     $i++;
// }

//  echo $motor[5];


// foreach($motor as $value) {
//     echo $value."<br>";
// }


// // PERCABANGAN

// if ($nama == "william") {
//     echo $nama." adalah orang Batak";
// } else if($nama == "anita") {
//     echo $nama." adalah orang ilang ";
// } else {
//     echo $nama." adalah orang nyasar";
// }

// switch($nama) {
//     case "william":
//         $pesan = $nama." adalah orang Batak";
//     break;
//     case "anita":
//         $pesan = $nama." adalah orang ilang";
//     break;
//     default:
//         $pesan = $nama." adalah orang nyasar";

// }

// echo $pesan;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>masukan nama dan jumlah pengulangan  </h1>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <label>Nama : </label>
        <input type="text" name="nama">
        <label>banyak pengulangan :</label>
        <input type="text" name="no">
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
        if(!empty($_POST['submit'])) {
            switch($_POST['nama']) {
                case "william":
                    $pesan = $_POST['nama']." adalah orang Batak";
                break;
                case "Budi":
                    $pesan = $_POST['nama']." adalah orang ilang";
                break;
                default:
                    $pesan = $_POST['nama']." adalah orang nyasar";
            }

            for ($i=0;$i<$_POST['no'];$i++) {
                echo $pesan."<br>";
            }

        } else {
            echo "silahkan inputkan nama dan jumlah";
        }
    ?>
</body>
</html>