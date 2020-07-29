<?php

function papan_catur($angka) {
// tulis kode di sini
for ($i=0; $i <= $angka ; $i++) { 
    $temp = "";
    for ($j=0; $j <= $angka ; $j++) { 
        if (($j % 2 !== 0 && $i % 2 == 0) / ($i % 2 !== 0 && $j % 2 == 0)) {
            $temp+="#";
        } else {
            $temp+=" ";
        }
    }
    echo $temp;
}
}

// TEST CASES
echo papan_catur(4) 
/*
# # # #
 # # #
# # # #
 # # #
 */

echo papan_catur(8)
/* 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # #
# # # # # # # #
 # # # # # # #
*/
echo papan_catur(5) 
/*
# # # # #
 # # # #
# # # # #
 # # # # 
# # # # #
*/
?>