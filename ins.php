<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="POST">
  Name<br>
  <input type="text" name="name"><br>
  Quantity:<br>
  <input type="text" name="qty"><br>
    Price:<br>
  <input type="text" name="price"><br>
  Customer Name
  <select name="c_id">
  
      <?php 
include_once './crud.php';

$c = new crud();

$query = "select * from customer";
$res = $c->getData($query);
foreach ($res as $key => $value) {
    
  
      echo  "<option value='$value[0]'>$value[1]</option>";
    
            
}

?>
  </select><br>
  Order Created:<br>
  <input type="date" name="dte"><br>
  <input type="submit" name="submit" value="submit"><br>
  



</form> 
    </body>
    
    
</html>

<?php
include_once './crud.php';
$c = new crud();

if(isset($_POST['submit'])){
    $name=$_POST['name'];
     $qty    =$_POST['qty'];
       $price    = $_POST['price'];
         $c_id=   $_POST['c_id'];
            $date=$_POST['dte'];
            
     $query = "insert into order1 values('','$name','$qty','$price','$c_id','$date')";
     
     $res = $c->insert($query);
}

 ?>
