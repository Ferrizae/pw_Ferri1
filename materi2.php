<form method = "POST">
    Masukkan angka : <input type="number" name="angka">
    <input type="submit" name="kirim" value="kirim">
</form>

<?php
    if(isset ($_POST["angka"])) {
    $newAngka = $_POST["angka"];
    for ($i = 1; $i <= $newAngka; $i++) {
        echo "ini angka ke $i <br>";
    }
    }