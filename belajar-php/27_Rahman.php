<?php
    /*$nama = array("Satria", "Arsyi", "Dhika", "Evan", "Fabian", "Irfan");
    
    echo "<pre>";
    print_r($nama);
    echo "</pre>";
    echo "<br>";*/

    $nama2=[
        [
            "nama" => "Satria",
            "kelas" => "RPL 1"],
        [
            "nama" => "Arsyi",
            "kelas" => "RPL 2"],
        [
            "nama" => "Dhika",
            "kelas" => "RPL 3"],
        [
            "nama" => "Evan",
            "kelas" => "RPL 4"],
        [
            "nama" => "Fabian",
            "kelas" => "RPL 5"],
        [
            "nama" => "Irfan",
            "kelas" => "RPL 6"],
        ];
    echo "OUTPUT 1";
    echo "<pre>";
    print_r($nama2);
    echo "</pre>";

    echo "<br>";
    echo "OUTPUT 2";
    echo "<br>";
    foreach($nama2 as $post){
        echo "Nama : ".$post["nama"]." Kelas : ".$post["kelas"];
        echo "<br>";
    }
?>