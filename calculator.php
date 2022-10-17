<?php

$result = null ;

if( @$_GET['fnum'] && $_GET['operator'] && $_GET['lnum'] ):

    $fnum=$_GET['fnum'];
    $op = $_GET['operator'];
    $lnum =$_GET['lnum'];

    switch($op){

    case '+':
        $result = ($fnum + $lnum);
        break;
        
    case '-':
        $result = ($fnum - $lnum);
        break;
    
    case '*':
        $result = ($fnum * $lnum);
        break;

    case '/':
        $result = ($fnum / $lnum);
        break;
    
    default:
        echo "you didn't Entet values !";
    }
endif
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Calculator </title>
</head>
<body>
    
    <h3> Calculator </h3>
    <form action="calculator.php" method="get" target="_self">

        <label for="fnum">First number:</label><br>
        <input type="text" id="fnum" name="fnum"><br><br>


        <select id="operator" name="operator" size="1">

            <option value="+"> + </option>
            <option value="-"> - </option>
            <option value="*"> * </option>
            <option value="/"> / </option>
        
        </select><br><br>

        <label for="lnum">Last number:</label><br>

        <input type="text" id="lnum" name="lnum"><br><br>

        <input type="submit" value=" = ">
    </form><br>

    <?php  
        if($result != null){ echo $result; }
    ?>
</body>
</html>