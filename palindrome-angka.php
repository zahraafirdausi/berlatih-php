<?php

function palindrome_angka($angka) {
  // tulis kode di sini
  $result = '';
  $strangka = strval($angka);
  $reversestring = '';
  for ($i=strlen($strangka)-1; $i >= 0; $i--){
    $reversestring .= $strangka[$i];
  }

  if ($reversestring == $strangka){
    $angka += 1;
  }

  while (true){
    $strangka = strval($angka);
    $reversestring = '';
    for ($i = strlen($strangka)-1; $i >=0; $i--){
      $reversestring .= $strangka[$i];
    }
    if ($reversestring == $strangka){
      global $result;
      $result = $strangka . '<br>';
      return $result;
    } else {
      $angka += 1;
    };
  };
};

// TEST CASES
echo palindrome_angka(8); // 9
echo palindrome_angka(10); // 11
echo palindrome_angka(117); // 121
echo palindrome_angka(175); // 181
echo palindrome_angka(1000); // 1001

?>