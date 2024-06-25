<?php
require("index.php");
 function even_chcker(){
    echo("<h2>". " CHECK IF A NUMBER IS AN EVEN OR ODD NUMBER "."</h2>");
    echo("<form method=\"POST\" action=\"$_SERVER[PHP_SELF]\">
    <input type=\"number\" name=\"number\" required>
    <input type=\"submit\" value=\"Check\">
    </form>");
    if(isset($_POST['number'])){
        $num=$_POST['number'];
        $even =false;
        
        if($num % 2 == 0){
                $even = true;
          
            }
        
        if($even){
            echo("<p>". "$num is an even number "."</p>");
        } else {
            echo("<p>". "$num is not an even number "."</p>");
        }
    }
}

    
even_chcker();
?>