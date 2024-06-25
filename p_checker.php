<?php
require("index.php");
 function pnc(){
    echo("<h2>". " CHECK IF A NUMBER IS A PRIME NUMBER "."</h2>");
    echo("<form method=\"POST\" action=\"$_SERVER[PHP_SELF]\">
    <input type=\"number\" name=\"number\" required>
    <input type=\"submit\" value=\"Check\">
    </form>");
    if(isset($_POST['number'])){
        $num=$_POST['number'];
        $prime = true;
        for($i=2;$i<$num;$i++){
            if($num % $i == 0){
                $prime = false;
                break;
            }
        }
        if($prime){
            echo("<p>". "$num is a prime number "."</p>");
        } else {
            echo("<p>". "$num is not a prime number "."</p>");
        }
    }

    
}pnc();
?>