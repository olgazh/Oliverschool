<?PHP

$comparable = rand (5, 155); /* random number for comparable*/
$counter = rand (5, 155);    /* random number fo counter*/
$array = array("a", "b", "c", "d", "e", "f", "g","j","k","l"); /* enter massive */
$rand = array_rand($array, 2); /*random for massive*/


if ($counter%2 == 0) {  /*if the number is even*/

	echo $comparable;
}
else {						/*if the number is odd*/
	echo $array[$rand[0]];
}

?>