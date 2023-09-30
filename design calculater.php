
<form  method="get">
    First Number : <input type="text" name="n1" placeholder="First number "><br>
    Put Operater : <input type="text" name="opr" placeholder="Select Operator" ><br>
    Second Number : <input type="text" name="n2"  placeholder="Second number "><br>
    <input type="submit"  name="cal" value ="calculate"><br>
</form>
<?php
if(isset($_GET['cal'])){

$num1 = $_GET['n1'];
$opr = $_GET['opr'];
$num2 = $_GET['n2'];

 if($opr == "+")
{
   $result = $num1 + $num2;
   echo $result;
}
 elseif ($opr == "-")
{
   $result = $num1 - $num2;
   echo $result ;
}
 elseif ($opr == "*")
{
   $result = $num1 * $num2;
   echo $result ;
}
 elseif($opr == "/")
{
   $result = $num1 / $num2;
   echo $result;
}
else 
{
    echo "invalid opperater";
}

}


?>

