<?php
if(isset($_POST['sub'])){
	$num1=$_POST['n1'];
	$num2=$_POST['n2'];
	$opr=$_POST['sub'];
	if($opr=="+")
		$ans=$num1+$num2;
	else if($opr=="-")
		$ans=$num1-$num2;
	else if($opr=="x")
		$ans=$num1*$num2;
	else if($opr=="/")
		$ans=$num1/$num2;
}

echo $ans;
?>