
<?php include 'header.php'; ?>
    
<body  >
<div class="background-1">  
<div class="container text-center ">    
  <h2 class="title">BANKING MANAGEMENT SYSTEM <br>Using HTML, CSS, Bootstrap, PHP, MySQL</h2><br>
  <div class="row">
    <div class="col-md-6 col-sm-6">
      <div class="button">
        <button type="button" class="btn btn-warning">
        <a href="customer_list.php" class="menu-btn"><i class="fa fa-user" aria-hidden="true"></i> CUSTOMERS LIST</a>

        </button>
      </div>
    </div>

    <div class="col-md-6 col-sm-6"> 
      <div class="button">
          <button type="button" class="btn btn-primary">
          <a href="transaction_history.php" class="menu-btn"><i class="fa fa-clone" aria-hidden="true"></i> TRANSACTION</a>

          </button>
        
      </div>
    </div>

  </div>
</div><br>
</div>
</body>

<?php 
include 'foot.php';
 ?>
