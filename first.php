<?php
define("electrical",2019);
//echo electrical;
$sum = electrical + 10;
echo $sum . '<br />';

$a = 10;
$b = 4; 
$a += $b;
echo $a;

echo '<br />';
$c = 10;
if($c>5)
{echo "C is greater<br>";}

$name = "dr.mehfooz.gulati<br />"; 
echo "How are you : " . $name;
echo "Where are you : " . $name;
echo "Why are you : " . $name;

$age = 35;
if($age >= 28 xor $age <= 31){
    echo "You are free. <br />";
}

$v = 30;
if($v > 30){
    echo "you are great";
}else
    echo "you need more time . <br />";

    $per = 102;

    if($per >=80 && $per <=100){
        echo "You are eligible";
    }elseif($per >=60 && $per <=80){
        echo "You are pass";
    }elseif($per >=40 && $per <=60){
        echo "You are on end point";
    }elseif($per >=33 && $per <=40){
        echo "You are in danger";
    }elseif($per <33){
        echo "You are fail";
}else{
    echo "please enter valid percentage . <br />";

$month = 6;

switch($month){
    case 1:
        echo "Now january";
        break;
        case 2:
            echo "Now Febuary";
            break;
            case 3:
                echo "Now march";
                break;case 4:
                    echo "Now April";
                    break;case 5:
                        echo "Now May";
                        break;case 6:
                            echo "Now June";
                            break;case 7:
                                echo "Now july";
                                break;case 8:
                                    echo "Now August";
                                    break;
                                    case 9:
                                        echo "Now september";
                                        break;case 10:
                                            echo "Now october";
                                            break;case 11:
                                                echo "Now november";
                                                break;case 12:
                                                    echo "Now December";
                                                    break;
                                                         default:
                                                         echo "enter valid month . <br />";
                                                         break ;

        
}
$m = 15;
($m > 15)? $n = "true" : $n = "false";
echo $n . '<br />';

 $k = 12;
 ($k > 10)? $l = "Greater" : $l = "smaller";
 echo $l . '<br />';

 

} 
?>
