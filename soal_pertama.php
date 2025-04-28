<!-- A000124 of Sloane’s OEIS -->

<?php

    function sloanes($n){
        $sequence = [];

        for($i = 0; $i <= $n; $i++){
            $term = ($i * ($i + 1) / 2 + 1);
            $sequence[] = (int)$term;
        }

        return $sequence;
    }
    
    $input = readline("Masukan angka: ");
    echo "==================================\n";

    if(is_numeric($input)){
        $n = (int)$input;
        $hasil = sloanes($n);
        echo "Deret sampai indeks ke-$n adalah:\n";
        foreach($hasil as $index => $value){
            echo "indeks($index) = $value\n";
        }
    }else{
        echo "Input harus berupa angka!";
    }

?>