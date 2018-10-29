<?php
$amount = $_POST["amount"];
$interest = $_POST["interest"];
$year = $_POST["year"];
printf ("<font size=4> Innitial Amount: %d Baht <br>" , $amount);
printf ("<font size=4> Annual Interest Rate: %d %s <br>" , $interest , "%");
printf ("<font size=4> Number of years: %d years<br>" , $year);
print "<b><font size=6>Result</b> <br>";
$ans = $amount;
$size = 1;
while ($size <= $year){
    $ans = $ans + ($ans*$interest)/100;
    printf ("<font size=5 color=orange>Year %d: %.2f Baht<br>" , $size , $ans);
    $size++;
}
?>
