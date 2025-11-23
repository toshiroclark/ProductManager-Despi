<?php
  $page = 'Orders';
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
        <h1 class="h2">Orders</h1>        
      </div>
      
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>Invoice #</th>
              <th>Customer Name</th>
              <th>Date</th>
              <th>Sub Total</th>
              <th>Tax</th>
              <th>Total</th>
            </tr>
          </thead>
          <tbody>
          <?php
            include 'functions/orders.php';
            $orders = getAllOrders(); 
            
            foreach($orders as $order){           
          ?>
            <tr>
              <td><?=$order['inv_number']?></td>
              <td><?=$order['cus_fname']?></td>
              <td><?=date('d M Y', strtotime($order['inv_date']))?></td>
              <td><?=number_format($order['inv_subtotal'], 2)?></td>
              <td><?=number_format($order['inv_tax'], 2)?></td>
              <td><?=number_format($order['inv_total'], 2)?></td>
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