<?php
    if(isset($_POST['submit'])){

        $value1 =  $_POST['Value1'];
        $value2 = $_POST['Value2'];
        $totalSum = $value1 + $value2;
        
        if($totalSum != $_POST['sum']){
            echo '<script>window.alert("WRONG ANSWER! TRY AGAIN")</script>';
        }
         else{
            echo '<script>window.alert("CORRECT ANSWER!")</script>';
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
            <h2>sowiso developer assignment</h2>
            
            <form method="POST">

                <?php 
                    $value1 = rand(1,100);
                    $value2 = rand(1,100);
                    $addSign = "+";
                ?>
                <label><?php echo $value1?></label>
                <label><?php echo $addSign?></label>
                <label><?php echo $value2?></label>
                <input type="hidden" name="Value1" value="<?php echo $value1; ?>" />
                <input type="hidden" name="Value2" value="<?php echo $value2; ?>" />
                <input type="text" name="sum" />
                <input type="submit" value="check" name="submit" />
            </form>
        </div>

</body>
</html>