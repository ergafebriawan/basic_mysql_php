<?php
require 'function.php';

//show single data or single row
$semuaKaryawan = ReadMultiData("SELECT * FROM karyawan");
var_dump($semuaKaryawan);
echo "<br>";

//show multiple data
$karyawan = ReadSigleData("SELECT * FROM karyawan WHERE nama='mustafi' LIMIT 1;");
var_dump($karyawan);
echo "<br>";

//add data to table
$addKaryawan = createData("INSERT INTO `karyawan`(`id`, `nama`, `alamat`, `jabatan`) 
                VALUES (NULL,'perompak2','blitar','frontend engineer');");
var_dump($addKaryawan);
echo "<br>";

//update data
$updateKaryawan = updateData("UPDATE karyawan SET nama='senja' WHERE id=6");
var_dump($updateKaryawan);
echo "<br>";

//delete data
$deleteKaryawan = deleteData("DELETE FROM karyawan WHERE id=6");
var_dump($deleteKaryawan);
echo "<br>";
?>