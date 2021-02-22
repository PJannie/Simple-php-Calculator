<html>

<body>
 
        <div align="center">
            <h1 style="color:blue;" >Simple Calculator</h1>
   
        <form method="POST" action="">
            <input type="text" name="number1" size=10>
            <select name="sign">
                <option>+</option>
                <option>-</option>
                <option>*</option>
                <option>/</option>
            </select>
        
            <input type="text" name="number2" size=10>
            <input type="submit" value="Submit">
        </form>
            <?php
              error_reporting (E_ALL ^ E_NOTICE);
                $number1 = $_POST['number1'];
                $number2 = $_POST['number2'];
                $sign = $_POST['sign'];
                $result = "";
                    switch ($sign)
                    {
                    case "+":
                    $result = $number1+$number2;
                    break;
                    case "-":
                    $result = $number1-$number2;
                    break;
                    case "*":
                    $result = $number1*$number2;
                    break;
                    case "/":
                    $result = $number1/$number2;
                    break;
                    }
                        echo "= &nbsp;", $result;

            ?>
   
    </div>
   
   
 
</body>
</html>