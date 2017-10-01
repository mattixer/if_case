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
switch($ocjena){
    case 1:
        echo "Nedovoljan";
        break;
    case 2:
        echo "Dovoljan";
        break;
    case 3:
        echo "Dobar";
        break;
    case 4:
        echo "Vrlo Dobar";
        break;
    case 5:
        echo "Odlican";
        break;
    default:
        echo "Ocjena nije valjana";
        break;
}
?>
</body>
</html>
