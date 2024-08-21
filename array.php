<?php

$siswa=[
    "Hanifah"   => 85,
    "Hasna"     => 70,
    "Rahayu"    => 90,
    "Zahra"     => 73,
    "Mikaila"   => 80,
    "Sita"      => 65,
    "Ana"       => 75
];

foreach ($siswa as $a => $b){  
    if ($b >= 75) {
        $ket = "Lulus";
    }else if ($b <= 75){
         $ket = "Tidak Lulus";
    }
    echo "Nama : $a, Nilai : $b, Keterangan : $ket" . "<br>";
}
    