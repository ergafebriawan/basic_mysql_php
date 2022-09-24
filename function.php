<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "new_karyawan";

$conn = mysqli_connect($hostname, $username, $password, $database);

if(mysqli_connect_errno()){
    echo "error: "+mysqli_connect_error();
}

function ReadMultiData($sql_query){
    global $conn;
    $data = [];
    $exec = mysqli_query($conn, $sql_query);
    while ($res = mysqli_fetch_assoc($exec)){
        $data[] = $res;
    }
    return $data;
}

function ReadSigleData($query){
    global $conn;
    $exec = mysqli_query($conn, $query);
    $res = mysqli_fetch_assoc($exec);
    return $res;
}

function createData($query){
    global $conn;
    $message = "";
    $exec = mysqli_query($conn, $query);
    if($exec){
        $message = "berhasil menambahkan data";
        return $message;
    }else{
        $message = "gagal menambahkan data";
        return $message;
    }
}

function updateData($query){
    global $conn;
    $message = "";
    $exec = mysqli_query($conn, $query);
    if($exec){
        $message = "berhasil update data";
        return $message;
    }else{
        $message = "gagal update data";
        return $message;
    }
}

function deleteData($query){
    global $conn;
    $message = "";
    $exec = mysqli_query($conn, $query);
    if($exec){
        $message = "berhasil hapus data";
        return $message;
    }else{
        $message = "gagal hapus data";
        return $message;
    }
}
?>