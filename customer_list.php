<?php 
    include 'header.php';
    include 'db.php';
    $query = "SELECT * FROM mytable";
    $result = mysqli_query($conn,$query);
?>

<body class="customer-body">
    


<div class="background-4">  

  <div class="container">
  <h2 class="title">CUSTOMER DETAILS</h2>
  <div class="table-responsive">
  <table class="table table-hover">
    <thead class="table-head">
      <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>EMAIL ID</th>
        <th>ACCOUNT BALANCE </th>
        <th>ACTION</th>
      </tr>
    </thead>
    <tbody>
      <?php
        while($rows=mysqli_fetch_array($result)){
      ?>
      <tr>
        <td><?php echo $rows['id'] ?></td>
        <td><?php echo $rows['name'] ?></td>
        <td><?php echo $rows['email'] ?></td>
        <td><?php echo $rows['amount'] ?></td>
        <td><a href="user_detail.php?id= <?php echo $rows['id'] ;?>"> <button type="button"  class="btn btn-success"><i class="fa fa-money" aria-hidden="true"></i> Transfer</button></a></td>
      </tr>
     <?php } ?>
    </tbody>
  </table>
</div>
</div>
</div>
</body>
<?php 
 include 'foot.php';
  ?>