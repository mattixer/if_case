<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
/** 3. Ako je prvi broj paran, provjeriti je li drugi neparan. */
$prvibroj = 5;
$drugibroj = 330;
echo $prvibroj;
echo "<br>";
echo $drugibroj;
echo "<br>";
if(($prvibroj%2)==0){
    if(($drugibroj%2)==1){
        echo "Prvi broj je paran, a drugi neparan";
    }else{
        echo "Oba broja su parna";
    }
}else{
    echo "Prvi broj je neparan";
}
?>
</body>
</html>