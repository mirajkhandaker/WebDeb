<?php

 if (file_exists(__DIR__.'/counter.txt')) {
     $counter = fopen(__DIR__.'/counter.txt','r');
     $num = fgets($counter);
     $num++;
     fclose($counter);
     $counter2 = fopen(__DIR__.'/counter.txt','w');
     fwrite($counter2,$num);
     fclose($counter2);
     echo "Number is ".$num;
 } else {
    echo "1st user";
    $counter = fopen(__DIR__.'/counter.txt','w');
    fwrite($counter,1);
    fclose($counter);
 }
?>