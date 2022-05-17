<?php 
include 'connect.php';

$qc = "
CREATE TABLE catgory (
id INT AUTO_INCREMENT ,
name VARCHAR(15) ,
PRIMARY KEY (id)
)
";

$db->exec($qc);


if(!empty($_POST['catgory'])){
 $qi = "
INSERT INTO catgory (id , name)
VALUES ('','".$_POST['catgory']."')
" ; 
$db->exec($qi);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post">

<input type="text" name="catgory" >
<input type="submit" name="Add" >

</form>  
</body>
</html>