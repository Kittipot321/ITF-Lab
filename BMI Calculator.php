<?php  

$name= $_POST["name"];
$height= $_POST["height"];
$weight= $_POST["weight"];
$bmi = $weight/pow($height/100, 2);
printf ("Name : %s <br>" , $name);
printf ("Height : %d <br>", $height);
printf ("Weight : %d <br>", $weight );
print "<b>Result</b> <br>";
printf ("BMI: %.2f <br>", $bmi);
if ($bmi < 18.5){
	echo "BMI Categories: Underweight ";}
elseif ($bmi >= 18.5 and $bmi < 22.9){
	echo "BMI Categories: Normal weight";}
elseif ($bmi >= 23 and $bmi < 24.9){
	echo "BMI Categories: Overweight";}
else{
	echo "BMI Categories: Obese";
}
?> 
