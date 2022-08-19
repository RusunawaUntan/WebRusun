<?php
//menjalankan server
function server(){
$db = mysqli_connect("localhost","root","","rusununtan");
return $db;
};

//CRUD//
function tambahPenghuni($data){
    $db = server();
    $nama = htmlspecialchars($data["nama"]);
    $nim = htmlspecialchars($data["nim"]);
   // $email = htmlspecialchars($data["email"]);
    $password = htmlspecialchars($data["password"]);


    $sql = "INSERT INTO user
            VALUES ('$nama','$nim','$password')";

    mysqli_query($db,$sql);
    return mysqli_affected_rows($db);
}

//fungsi tampil semua
function tampilSemuapenghuni(){
    $db = server();
    $sql = "SELECT * FROM user";
    $result = mysqli_query($db,$sql);
   return $result;
};
//query

function query($query){
    $db = server();
    $result = mysqli_query($db,$query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
       $rows[] = $row; 
    }
    return $result;

}


//fungsi tampil sesuai id/nim
function tampilPenghuni($nim){
    $db = server();
    $sql = "SELECT * FROM penghuni WHERE nim = '$nim'";
    $result = mysqli_query($db,$sql);
    return $result;

}

//fungsi ubah

function ubah(){
    $db = server();
    $user = [
        "nama" => "",
        "nim" => "",
    ];
}

//hapus penhuni

function hapusPenghuni(){
    $db = server();
    $sql = "DELET";
}

//get article 
function getArticle(){
$db = server();
$query = mysqli_query($db,"SELECT * FROM article");
$rows = [];
while ($result = mysqli_fetch_assoc($query)){
    $rows[] = $result;
}

}
// AKhir CRUD //

//login function//

// function login($data){
//     $db = server();

//     $username = strtolower(stripslashes($data["username"]));
//     $password = mysqli_real_escape_string($data["password"]);
    


// }

//login cek confirm pass
function cekLogin($data){
    $db= server();
    $nim = $data["nim"];
    $password = $data["password"];
    $password2 =$data["password2"];

    if($password !== $password2){
        echo "<script>
            alert('password tidak sesuai');
        </script>";

        return false;
    } else {
        echo "<script>
        alert('selamat anda berhasil login');
    </script>";
    }
    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);
    die;
}    

// tambah akun
function tambahAkun($data){
    $db = server();

    $nama = htmlspecialchars($data["nama"]);
    $nim = htmlspecialchars($data["nim"]);
    $email = htmlspecialchars($data["email"]);
    $password = htmlspecialchars($data["password"]);


    $sql = "INSERT INTO user
            VALUES ('$nama','$nim', '$email','$password')";

    mysqli_query($db,$sql);
    return mysqli_affected_rows($db);
}

// ubah akun
function ubahAkun($data){
    $db = server();

    $nama = htmlspecialchars($data["nama"]);
    $nim = htmlspecialchars($data["nim"]);
    $email = htmlspecialchars($data["email"]);
    $password = htmlspecialchars($data["password"]);


    $sql = "UPDATE user SET
            nama = '$nama',
            nim = '$nim',
            email = '$email',
            pass = '$password'";

    mysqli_query($db,$sql);
    return mysqli_affected_rows($db);
}
?>