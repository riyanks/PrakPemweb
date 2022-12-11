<?php

function IntToRoman ($bil){

    $result = '';

    $index = array(
        'M' => 1000,
        'CM' => 900, 
        'D' => 500, 
        'CD' => 400, 
        'C' => 100, 
        'XC' => 90, 
        'L' => 50, 
        'XL' => 40, 
        'X' => 10, 
        'IX' => 9, 
        'V' => 5, 
        'IV' => 4, 
        'I' => 1
    );

    foreach ($index as $Bstring => $value) {
        $cek = intval($bil/$value);
        
        $result .= str_repeat($Bstring, $cek);

        $bil %= $value;
    }

    return $result;
}
?>

<?php

echo IntToRoman(58);
echo "<br>";
echo IntToRoman(1994);
