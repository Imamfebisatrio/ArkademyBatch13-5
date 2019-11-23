<?php
$kauskaki = array('Biru', 'Merah', 'Kuning', 'Biru', 'Hitam', 'Kuning', 'Putih', 'Abu-abu');
$array = array_map('strtolower', $kauskaki); //strtolower untuk merubah huruf menjadi kecil semua
 
print_r(array_count_values($array));
?>