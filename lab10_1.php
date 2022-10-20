<?php
	$m = $_GET["m"];
	$o = $_GET["o"];
    $b = $_GET["b"];
	echo "<b>ยอดขาย</b> ";
	echo ($m*30) + ($o*70)+($b*30);
    echo " <b>บาท</b>";
?>