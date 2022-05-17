<?php

include 'connect.php';
$qg = "
SELECT * FROM catgory
";
$data = $db->query($qg);

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
  
<form action="">
  <label for="cars">Choose a car:</label>
  <select id="cars" name="cars">
      <?php foreach ($data as  $v) {?>
        
      
    <option value="<?php echo $v['name'] ?>"><?php echo $v['id'].'- '.$v['name']?></option>
<?php }?>
  </select>
  <input type="submit">
</form>


</body>
</html>