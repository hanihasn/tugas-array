<?php

$siswa=[
    "Hanifah" => 85,
    "Hasna" => 70,
    "Rahayu" => 90,
    "Zahra" => 75,
    "Mikaila" => 80,
    "Sita" => 65
];

foreach ($siswa as $a => $b){  
    if ($b > 75) {
        $keterangan = "Lulus";
    }else if ($b <= 75){
         $keterangan = "Tidak Lulus";
    }
    echo "Nama : $a, Nilai : $b, Keterangan : $keterangan <br>";
}
    