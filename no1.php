<?php
// Fungsi Bubble Sort
function bubbleSort(&$arr) {
    $n = count($arr);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($arr[$j] > $arr[$j + 1]) {
                // Tukar elemen
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }
}

// Input array
$data = [5, 3, 8, 4, 2, 7, 1];

// Tampilkan array sebelum sorting
echo "Sebelum sorting: " . implode(", ", $data) . "\n";

// Panggil fungsi Bubble Sort
bubbleSort($data);

// Tampilkan array setelah sorting
echo "Setelah sorting: " . implode(", ", $data) . "\n";
?>
