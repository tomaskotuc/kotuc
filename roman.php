<?php
$pomocnaPromenna = 2;
    for ($i = 2; $i <= 100; $i++) {
        if(isPrime($i)) {
            if($pomocnaPromenna + 2 == $i) {
                echo $pomocnaPromenna. " ".$i."<br>";
        }
        $pomocnaPromenna = $i;
    }
}
    function isPrime($cislo) {
        $result = true;
        $odmocnina = sqrt($cislo);
        for ($j = 2; $j <= $odmocnina; $j++) {
            if($cislo % $j == 0) {
                $result = false;
        }
    }
    return $result;
}
