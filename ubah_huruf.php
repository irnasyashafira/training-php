<?php
function ubah_huruf($string){
//kode di sini
$alphabet = "abcdefghijklmnopqrstuvwxyz";
$hasil = "";
for ($i=0; $i < strlen($string); $i++) { 
    $posisi = strrpos($alphabet. $string[$i]);
    $hasil .= substr($alphabet, $posisi+1, 1);
}
return $hasil;
}

// TEST CASES
echo ubah_huruf('wow'); // xpx
echo ubah_huruf('developer'); // efwfmpqfs
echo ubah_huruf('laravel'); // mbsbwfm
echo ubah_huruf('keren'); // lfsfo
echo ubah_huruf('semangat'); // tfnbohbu

?>