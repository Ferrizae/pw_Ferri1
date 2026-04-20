<form method = "POST">
    Masukkan angka : <input type="number" name="angka">
    <input type="submit" name="kirim" value="kirim">
</form>

<?php
if(isset($_POST["angka"])) {
    $newAngka = $_POST["angka"];

    for ($i = 1; $i <= $newAngka; $i++) {
        if ($i % 2 == 0) {
            echo "ini angka ke $i (Genap) <br>";
        } else {
            echo "ini angka ke $i (Ganjil) <br>";
        }
    }
}
?>