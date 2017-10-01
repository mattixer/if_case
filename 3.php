<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
/** 2.	Provjeriti koji je broj u varijabli(od 1 do 5) 
i vratiti ocijenu u varijabli(ako $var = 5 ispisati „Odlican“) */
$ocjena = 4;
echo $ocjena;
echo "<br>";
if($ocjena==1){
    echo "Nedovoljan";
}elseif ($ocjena==2){
    echo "Dovoljan";
}elseif ($ocjena==3){
    echo "Dobar";
}elseif ($ocjena==4){
    echo "Vrlo Dobar";
}elseif ($ocjena==5){
    echo "Odlican";
}else{
    echo "Ocjena nije valjana";
}
?>
</body>
</html>
