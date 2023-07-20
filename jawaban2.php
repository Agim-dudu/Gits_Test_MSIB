<?php
function DenseRanking($JumlahPemain, $Skor, $JumlahPermainanGits, $SkorGits) {
    // Menghilangkan skor yang duplikat dari daftar skor dan mengurutkannya dari besar ke kecil
    $uniqueScores = array_unique($Skor);
    rsort($uniqueScores);

    // Inisialisasi array untuk menyimpan hasil peringkat GITS
    $GitsRanking = array();

    // Menentukan peringkat GITS untuk setiap skor GITS
    for ($i = 0; $i < $JumlahPermainanGits; $i++) {
        $rank = 1;
        foreach ($uniqueScores as $score) {
            if ($SkorGits[$i] < $score) {
                $rank++;
            } else {
                break;
            }
        }
        $GitsRanking[] = $rank;
    }

    return $GitsRanking;
}

// Memanggil fungsi
$JumlahPemain = 7;
$Skor = [100, 100, 50, 40, 40, 20, 10];
$JumlahPermainanGits = 4;
$SkorGits = [5, 25, 50, 120];
$GitsRanking = DenseRanking($JumlahPemain, $Skor, $JumlahPermainanGits, $SkorGits);

// Output hasil peringkat GITS
echo ('Output : ');
echo implode(' ', $GitsRanking);

?>