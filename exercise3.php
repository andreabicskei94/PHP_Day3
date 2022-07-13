<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise3</title>
</head>
<body>
    
 <?php
function tenRandomNum(){
    $rno = array();
for ($count=0;  $count < 10; $count++){
        $rno[$count]=rand(10,50);
    }

    return $rno;
} 
$var = tenRandomNum();
var_dump($var);
print_r(max($var));


?>
</body>
</html>