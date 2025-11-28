<?php

include 'connectdb.php';

function getAllCustomers(){
  $conn = Connect();
  $query = "SELECT * FROM customer ORDER BY cus_lname, cus_fname";
  $result = $conn->query($query);
  $data = [];
  
  while($row = $result->fetch_assoc()){
      $data[] = $row;
  }
  return $data;
}

?>