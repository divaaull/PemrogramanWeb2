<?php
// Function untuk membuat nama lengkap dari nama depan dan nama belakang
function buatNamaLengkap($namaDepan, $namaBelakang) {
    return $namaDepan . " " . $namaBelakang;
}

// Memanggil function
echo buatNamaLengkap("Diva", "Aulia");
echo "<br>";
echo buatNamaLengkap("Byeon", "Woo Seok"); 