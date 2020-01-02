<?php

include_once './crud.php';

$c = new crud();

$query = "select * from order1";

$res = $c->getData($query);

echo "<table border=1px >",
        "<tr>";

foreach ($res as $key => $value) {
    
  
      echo  "<td>",$value[0],"</td>",
            "<td>",$value[1],"</td>",
              "<td>",$value[2],"</td>",
              "<td>",$value[3],"</td>",
              "<td>",$value[4],"</td>",
              "<td>",$value[5],"</td>",
            "<td>","<a href=\"edit.php?id=$value[0]\" >Edit</a>","</td>",
            "<td>","<a href=\"delete.php?id=$value[0]\" >Delete</a>","</td>","</tr>";
    
            
}
