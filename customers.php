<?php
  $page = 'Customers';
?>
<!doctype html>
<html lang="en">
 <?php
 include 'component/head.php';
 ?>
  <body>
 <?php
 include 'component/nav.php';
 ?>   

<div class="container-fluid">
  <div class="row">
    <?php
      include 'component/sidebar.php';
      ?>  

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Customers</h1>        
      </div>  
      
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>Customer Code</th>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Initial</th>
              <th>Area Code</th>
              <th>Phone</th>
              <th>Balance</th>
            </tr>
          </thead>
          <tbody>
          <?php
            include 'functions/customers.php';
            $customers = getAllCustomers(); //call getAllCustomers function
            //loop all customers and display
            foreach($customers as $customer){           
          ?>
            <tr>
              <td><?=htmlspecialchars($customer['cus_code'])?></td>
              <td><?=htmlspecialchars($customer['cus_fname'])?></td>
              <td><?=htmlspecialchars($customer['cus_lname'])?></td>
              <td><?=htmlspecialchars($customer['cus_initial'])?></td>
              <td><?=htmlspecialchars($customer['cus_areacode'])?></td>
              <td><?=htmlspecialchars($customer['cus_phone'])?></td>
              <td><?=htmlspecialchars($customer['cus_balance'])?></td>
              </td>
            </tr>
          <?php  } ?>      
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      
        <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"></script>
        <script src="js/dashboard.js"></script>
  </body>
</html>