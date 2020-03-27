<?php include_once("index.html"); 

<html>
<body bgcolor="black">

<font color="darkred">
<center>Your Principal is $<?php echo $_POST["principal"]; ?>.

Your Interest Rate is <?php echo $_POST["inrate"]; ?>%.

Your Loan is for 
<?php
if ($_POST["time"]==1) 
  echo $_POST["time"] . " year.";
else 
  echo $_POST["time"] . " years.";
?>

Your total is:
<?php
$p=$_POST["principal"];
$i=($_POST["inrate"]/100);
$t=$_POST["time"];
$n=365;
$a=(1 + ($i/365));
$b=($n*$t);
$total=$p*(pow($a, $b));
if
(
$p=$_POST["principal"] &&
$i=($_POST["inrate"]/100) &&
$t=$_POST["time"] &&
$n=365 &&
$a=(1 + ($i/365)) &&
$b=($n*$t) &&
$total=$p*(pow($a, $b))
)
echo $total
?>
</center>


</font>
</body>
</html>

?>
