<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
/** 3. Ako je prvi broj paran, provjeriti je li drugi neparan. */
$prvibroj = 2;
$drugibroj = 331;
echo $prvibroj;
echo "<br>";
echo $drugibroj;
echo "<br>";
switch($prvibroj%2){
	case 0:
		switch($drugibroj%2){
			case 1:
				echo "Prvi broj je paran, a drugi neparan";
				break;
			default:
				echo "Oba broja su parna";
				break;
		}
		break;
	default:
		echo "Prvi broj je neparan";
		break;
}
?>
</body>
</html>