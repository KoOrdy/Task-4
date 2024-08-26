<?php
$res="";
if (isset($_POST["submit"])){
    $num1=$_POST["num1"];
    $num2=$_POST["num2"];
    $operation=$_POST["operation"];
    if(is_numeric($num1)&&is_numeric($num2)){
        switch($operation){
            case "+":
                $res=$num1+$num2;
                break;
            case "-":
                $res=$num1-$num2;
                break;
            case "*":
                $res=$num1*$num2;
                break;
            case "/":
                if($num2 != 0){
                    $res=$num1/$num2;
                }else{
                    $res="Error: You can't division by zero";
                }
                break;
            default:
                $res="Error: Invalid operation";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
    <title>calculator</title>
</head>
<body>
    <form method="post" action="">
    <label for="num1">Enter first number: </label>    
    <input type="number" id="num1" name="num1" placeholder="number 1" required>
        <br>
        <label for="operation">Enter the operation</label> 
        <select name="operation" id="operation" required>
            <option value="+">Addition (+)</option>
            <option value="-">Subtraction (-)</option>
            <option value="*">Multiplication (*)</option>
            <option value="/">Division (/)</option>
        </select>
        <br>
        <label for="num2">Enter second number: </label>    
        <input type="number" id="num2" name="num2" placeholder="number 2" required>
        <br> 
        <input type="submit" value="Calculate"  name="submit">
    </form>
    <?php
    if ($res !== "") {
        echo "<h3>Result: $res</h3>";
    }
    ?>
</body>
</html>