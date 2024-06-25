<?php
require("index.php");
echo("<h2>". " FIND FACTORIAL OF A NUMBER"."</h2>");
echo("<form method=\"POST\" action=\"$_SERVER[PHP_SELF]\">
<input type=\"number\" name=\"number\" required>
<input type=\"submit\" value=\"Check\">
</form>");
function fact($n){
    if($n<=1){
        return 1;
    }
    else{
        return $n*fact($n-1);
    }
}
if(isset($_POST['number'])){
    $num=$_POST['number'];
   
    echo("<p>". " The Factorial of $num =  ".fact($num)."</p>");
   
}
 