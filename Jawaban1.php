<?php
function hitungDeretA000124($n) {
    $hasilDeret = [];
    $jumlahSaatIni = 0;

    for ($i = 1; $i <= $n; $i++) {
        $jumlahSaatIni += $i;
        $hasilDeret[] = $jumlahSaatIni - $i + 1;
    }

    return implode('-', $hasilDeret);
}

// panggil fungsi
$inputan = 7;
$output_program = hitungDeretA000124($inputan);
echo "Output: " . $output_program;
?>
