
<?php

$num;
for ($num = 1; $num <= 20; $num++)
 {
    if (str_contains($num, 3) == true) 
        echo "lucky ";
    else if ($num % 15 == 0)
        echo "fizzbuzz ";
    else if (($num % 3) == 0)
        echo "fizz ";
    else if (($num % 5) == 0) 
        echo "buzz ";
    else 
        echo $num . " ";    
 }

?>
