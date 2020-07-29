<?php
function pasangan_terbesar($angka){
// kode di sini
    $test = 0;
    $temp = str_split($angka);

    for ($i=0; $i < count($temp)-1; $i++){
        if ($i === 0) $test = $temp[$i] + $temp[$i+1];
        if ($test < $temp[$i] + $temp[$i+1]) $test = $temp[$i] + $temp[$i+1];
    }

    echo $test;
    echo "<br>";
}

// TEST CASES
echo pasangan_terbesar(641573); // 73
echo pasangan_terbesar(12783456); // 83
echo pasangan_terbesar(910233); // 91
echo pasangan_terbesar(71856421); // 85
echo pasangan_terbesar(79918293); // 99

?>