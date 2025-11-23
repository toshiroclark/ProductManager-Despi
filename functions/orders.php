<?php

include 'connectdb.php';

function getAllOrders(){

  $conn = Connect();
  $query = "SELECT i.inv_number, c.cus_fname, c.cus_lname, i.inv_date, i.inv_subtotal, i.inv_tax, i.inv_total 
            FROM invoice i
            JOIN customer c ON i.cus_code = c.cus_code
            ORDER BY i.inv_date ";
  $result= $conn->query($query);
  $data = [];
  
  while($row = $result->fetch_assoc()){
      $data[]=$row;
  }
  return $data;

}
?>
