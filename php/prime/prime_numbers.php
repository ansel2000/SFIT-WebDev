<?php
$n1=$_POST["n1"];
$n2=$_POST["n2"];
for($i=$n1; $i<=$n2; $i++){
    $c=true;
    if($n1<0 || $n2 < 0){
    echo "Number is negative";
    }
    for($j=2; $j<=$i/2; $j++)
    {
        if($i %$j == 0)
        {
            $c=false;
        break;
        }
    }
    if($c==true){
        echo $i.",";
    }
};
?>