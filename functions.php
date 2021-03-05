<?php 

function getNumMatches()
{
    $arrs=['aya','aml','basma','aya','aml','aya','aya'];
    $x=0;
    foreach($arrs as $arr){
        if($arr=="aya")
        {
            $num= $x++;
        }
    }
    return $x;
}


// $result = getNumMatches();
// echo "Num Of Words You Search Is $result  <br><br>" ;


function getPriceWithDiscount($price){
    if($price < 1000){
        $result=($price*90)/100;
    }elseif($price>=1000){
        $result=($price*95)/100;
    }
    return $result;
}

 
?>
