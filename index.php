<?php



$Value=0;
$Scale="";

$Scale = $_GET['Sc'];
$Value = $_GET['Va'];
echo "The Scale is: ".$Scale." and the value is: ".$Value;
echo "<br>";

$inch=2.54;
$cm=0.39;

    if($Scale == "cm"){
    $centimeter=$inch * $Value;
    echo $centimeter." centimeters";
    
    }else{
        if($Scale == "inch"){
        $inch=$cm * $Value;
        echo $inch. " inch";
        }  
    }
        
?>

