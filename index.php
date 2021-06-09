<?php

    if(isset($_POST['submit'])){
        $totalSum = $_POST['Value1'] + $_POST['Value2'];
        if($totalSum != $_POST['sum']){
            echo "wrong answ";
        }
        else{
            echo "correct ans";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Test</title>
</head>
<body>

        <div class="container">
            
            <form method="POST">

                <?php 
                    $value1 = rand(1,100);
                    $value2 = rand(1,100);
                    $addSign = "+";
                    //next send the values with the form to calc.php
                ?>
                <label><?php echo $value1?></label>
                <label><?php echo $addSign?></label>
                <label><?php echo $value2?></label>
                <input type="hidden" name="Value1" value="<?php echo $value1; ?>" />
                <input type="hidden" name="Value2" value="<?php echo $value2; ?>" />
                <input type="text" name="sum" />
                <input type="submit" value="calculate" name="submit" />
                
            </form>
        </div>

</body>
</html>