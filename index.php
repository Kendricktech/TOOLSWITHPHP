<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
        <select id="tool" name="tool">
            <option value="1">PRIME NUMBER CHECKER</option>
            <option value="2">EVEN ODD CHECKER</option>
            <option value="3">FACTORIAL FINDER</option>
            <option valuE="4">ARMSTRONG NUMBER</option>
        </select>
        <br/>
        <input type="submit" value="SELECT">
    </form>

    <?php 
   
   if (isset($_GET['tool'])) {
    switch($_GET['tool']){
        case '1':
            header("Location: p_checker.php");
            exit();
        case '2':
            header("Location:eo.php");
            exit();
        case "3":
            header("Location:factorial.php");
            break;
        case "4":
            header("Location:armstrong.php");
            break;
        default:
            // Handle invalid selection
            break;
    }
}
?>
    
</body>
</html>
