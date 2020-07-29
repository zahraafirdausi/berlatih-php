<?php
function skor_terbesar($arr){
//kode di sini
$output =[];
$outpt1=0;
$outpt2=0;
$outpt3=0;

foreach ($arr as $key => $value){
  if ($value['nilai']>$outpt1 and $value['kelas'] == 'Laravel'){
    $outpt1=$value['nilai'];
  }
  else if ($value['nilai']>$outpt2 and $value['kelas'] == 'React Native'){
    $outpt2=$value['nilai'];
  }
  else if ($value['nilai']>$outpt3 and $value['kelas'] == 'React JS'){
    $outpt3=$value['nilai'];
}
else{
  continue;
}
$output[$value['kelas']] = [ 
  'nama' => $value['nama'], 
  'kelas' => $value['kelas'],
  'nilai' => $value['nilai']
];
}
return $output;
};
/*$output = array_column($arr, 'nilai');
array_multisort($output, SORT_DESC, $arr);
}; */

// TEST CASES
$skor = [
  [
    "nama" => "Bobby",
    "kelas" => "Laravel",
    "nilai" => 78
  ],
  [
    "nama" => "Regi",
    "kelas" => "React Native",
    "nilai" => 86
  ],
  [
    "nama" => "Aghnat",
    "kelas" => "Laravel",
    "nilai" => 90
  ],
  [
    "nama" => "Indra",
    "kelas" => "React JS",
    "nilai" => 85
  ],
  [
    "nama" => "Yoga",
    "kelas" => "React Native",
    "nilai" => 77
  ],
];

print_r(skor_terbesar($skor));
/* OUTPUT
  Array (
    [Laravel] => Array
              (
                [nama] => Aghnat
                [kelas] => Laravel
                [nilai] => 90
              )
    [React Native] => Array
                  (
                    [nama] => Regi
                    [kelas] => React Native
                    [nilai] => 86
                  )
    [React JS] => Array
                (
                  [nama] => Indra
                  [kelas] => React JS
                  [nilai] => 85
                )
  )
*/
?>