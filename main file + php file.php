<!DOCTYPE html>
<html>
    <head>
        <title> PHP form</title>
    </head>
    <body>
        <form action="ac.php" method="post">
            Number 1 :<input type="number"  name ="n1"><br>
            Number 2 :<input type =" number" name ="n2"><br>
            Select operation :
            <select name ="op">
                <option value ="add">add</option>
                <option value = "sub">sub</option>
                <option value = "mul">mul</option>
                <option value = "div">div</option>
                <br>
            </select>
            
            <input type="submit" value="Calculate">
        </form>
    </body>
</html>

<?php

$n1 = filter_input(INPUT_POST,'n1');
$n2 = filter_input(INPUT_POST,'n2');
$op = filter_input(INPUT_POST,'op');

$res = 0;

if($op == 'add')
{
    $res = $n1 + $n2;
}
else if($op == 'sub')
{
    $res = $n1 - $n2;
}
else if($op == 'mul')
{
    $res = $n1 * $n2;
}
else if($op == 'div')
{
    $res = $n1 / $n2;
}
echo "Final answer :".$res;


?>
