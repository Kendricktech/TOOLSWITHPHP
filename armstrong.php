<?php
require("index.php");

echo("<h2>FIND ARMSTRONG NUMBER</h2>");
echo('<form method="POST" action="' . $_SERVER['PHP_SELF'] . '">
<input type="number" name="number" required>
<input type="submit" value="Check">
</form>');

if (isset($_POST["number"])) {
    $str = (string)$_POST['number'];
    $arrr = str_split($str);
    $length = strlen($str);
    $sum = 0;

    foreach ($arrr as $v) {
        $sum += $v ** $length;
    }
    if($sum==(int)$str){
        echo("<p>". " $str is an Armstrong Number"."</p>");
    }
    else{
        echo("<p>". " $str is not an Armstrong Number"."</p>");
    }

   
}
?>
