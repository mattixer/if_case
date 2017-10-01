<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
/** 1.	Provjeriti koji je odnos 2 broja (jesu li jednaki, je li jedan veci od drugog)
*/
$prvibroj = 8;
$drugibroj = 8;
echo $prvibroj;
echo "<br>";
echo $drugibroj;
echo "<br>";
switch($prvibroj)
{
    case $drugibroj:
        echo "Brojevi su jednaki";
        break;
    default:
        if($prvibroj>$drugibroj){
            echo "Prvi broj veci je od drugoga.";
        }
        else{
            echo "Prvi broj manji je od drugoga.";
        }
        break;

}
?>
</body>
</html>
