<?php
// Program untuk menentukan angka ganjil atau genap menggunakan for loop

// Daftar angka yang ingin dicek
$angkaArray = [10, 3, 7, 8, 2, 15, 20, 1];

// Menampilkan hasil sebelum pengecekan
echo "Daftar angka: " . implode(", ", $angkaArray) . "\n\n";

// Perulangan untuk mengecek setiap angka
for ($i = 0; $i < count($angkaArray); $i++) {
    $angka = $angkaArray[$i];

    // Mengecek apakah angka tersebut genap atau ganjil
    if ($angka % 2 == 0) {
        echo "$angka adalah Genap\n";
    } else {
        echo "$angka adalah Ganjil\n";
    }
}
?>
