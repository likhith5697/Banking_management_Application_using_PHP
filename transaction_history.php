<?php include 'header.php'; ?>



<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


    

<div class="background-2">  
  <div class="container">
  <h2 class="title">TRANSACTION HISTORY</h2>
  <div class="table-responsive">
  <table class="table table-hover">
    <thead class="table-head">
      <tr class="transaction-tr">
          
          <th>SENDER</th>
        <th>RECEIVER</th>
        <th>TRANSFERRED AMOUNTS</th>

      </tr>
    </thead>
    <tbody>
      <?php 
        include 'db.php';
        $sql = "select * from transaction";
        $query =mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($query)) {
        ?>
      <tr>
        <td><?php echo $row['sender'];?></td>
        <td><?php echo $row['receiver'];?></td>
        <td><?php echo $row['credits'];?></td>
      </tr>
    <?php } ?>
    </tbody>
  </table>
</div>
</div>
</div>

<?php include 'foot.php'; ?>