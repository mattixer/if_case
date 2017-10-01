<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
/** 1.	Provjeriti koji je odnos 2 broja (jesu li jednaki, je li jedan veci od drugog)
*/
$prvibroj = 1;
$drugibroj = 8;
echo $prvibroj;
echo "<br>";
echo $drugibroj;
echo "<br>";
if($prvibroj==$drugibroj){
    echo "Brojevi su jednaki.";
}
elseif ($prvibroj>$drugibroj){
    echo "Prvi broj veci je od drugoga.";
}
else{
    echo "Prvi broj manji je od drugoga.";
}
?>
</body>
</html>
