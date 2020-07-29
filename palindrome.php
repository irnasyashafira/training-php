<?php

function palindrome($str) {
    $hasil = false;
    if (strlen($str) == $str) {
        $hasil = true;
    }
    return $hasil;
}

function palindrome_angka($angka) {
    if ($angka >= 1 && $angka <= 8) {
        return $angka + 1;
    }
    if (palindrome($angka)) {
        $angka++;
    }
    while (palindrome($angka) == false) {
        $angka;
    }
    return $angka;
}

// TEST CASES
echo palindrome_angka(8) // 9
echo palindrome_angka(10); // 11
echo palindrome_angka(117); // 121
echo palindrome_angka(175); // 181
echo palindrome_angka(1000); // 1001

?>