<?php
function hello()
{
    echo "Selamat Datang di Kelas TIA1";
}
hello();

function tambah(int $a, int $b,){
    $hasil = $a + $b;
    return $hasil;
}
echo "<br><br>";
echo tambah (16, 4);

function kali(int $a, int $b){
    $hasil = $a * $b;
    return $hasil;
}

function bagi(int $a, int $b){
    $hasil = $a / $b;
    return $hasil;
}

function kurang(int $a, int $b){
    $hasil = $a - $b;
    return $hasil;
}

function login($username, $password){
    $usernameBenar = "admin";
    $passwordBenar ="12345";
    if($username == $usernameBenar && $password == $passwordBenar) {
        return true;
    } else {
        return false;
    }
}
?>

<br><br>

<form method="POST">
    Masukan Angka 1 : <input type="number" name="angka1">
    Masukan Angka 2 : <input type="number" name="angka2">
    <input type="submit" name="kirim" value="Kirim">
</form>

<?php
if (isset($_POST["angka1"])) {
    $newAngka1 = $_POST["angka1"];
    $newAngka2 = $_POST["angka2"];
    echo tambah($newAngka1, $newAngka2);
    echo "<br>";
    echo kali($newAngka1, $newAngka2);
    echo "<br>";
    echo bagi($newAngka1, $newAngka2);
    echo "<br>";
    echo kurang($newAngka1, $newAngka2);
}
?>


<br><br>
<form method="POST">
    <label for="username">Username:</label>
    <input type="text" name="username"><br><br>
    <label for="password">Password:</label>
    <input type="password" name="password"><br><br>
    <input type="submit" name="login" value="Login">
</form>

<?php
if (isset($_POST["login"])) {
    $newUsername = $_POST["username"];
    $newPassword = $_POST["password"];
    if (login($newUsername, $newPassword)) {
        echo "Login Berhasil";
    } else {
        echo "Login Gagal";
    }

}
?>