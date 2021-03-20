<?php 
include 'header.php'; 
include 'db.php';
if(isset($_POST['submit']))
{
    $from = $_GET['id'];
    $toUser = $_POST['to'];
    $amnt = $_POST['amount'];

    $sql = "SELECT * from mytable where id=$from";
    $query = mysqli_query($conn,$sql);
    $sql1 = mysqli_fetch_array($query); 

    $sql = "SELECT * from mytable where id=$toUser";
    $query = mysqli_query($conn,$sql);
    $sql2 = mysqli_fetch_array($query);

  
 if($amnt > $sql1['amount'])
    {

        echo '<script type="text/javascript">';
        echo ' alert("Insufficient Balance")';  
        echo '</script>';
    }

     else if($amnt == 0){
         echo "<script type='text/javascript'>alert('Enter Amount Greater than Zero');
    </script>";
     }
    else {

      
        $newCredit = $sql1['amount'] - $amnt;
        $sql = "UPDATE users set amount=$newCredit where id=$from";
        mysqli_query($conn,$sql);



        $newCredit = $sql2['amount'] + $amnt;
        $sql = "UPDATE users set credits=$newCredit where id=$toUser";
        mysqli_query($conn,$sql);

        $sender = $sql1['name'];
        $receiver = $sql2['name'];
        $sql = "INSERT INTO transaction(`sender`, `receiver`, `credits`) VALUES ('$sender','$receiver','$amnt')";
        $tns=mysqli_query($conn,$sql);
        if($tns){
           echo "<script type='text/javascript'>
                    alert('Transaction Successfull!');
                    window.location='transaction_history.php';
                </script>";
        }
        $newCredit= 0;
        $amnt =0;
    }

}
?>
  <div class="background-3">  

  <div class="container">
    <div class="col-sm-12">
  <h2 class="title">TRANSFER AMOUNT</h2>

  <?php
    include 'db.php';
    $sid=$_GET['id'];
    $sql = "SELECT * FROM  mytable where id=$sid";
    $query=mysqli_query($conn,$sql);
    if(!$query)
    {
    echo "Error ".$sql."<br/>".mysqli_error($conn);
    }
    $rows=mysqli_fetch_array($query);
  ?>
 <form method="post" name="tcredit" class="tabletext" >
  <div class="table-responsive">
  <table class="table table-hover">
    <thead class="table-head">
      <tr>
        <th>CUSTOMER ID</th>
        <th>NAME</th>
        <th>EMAIL ID</th>
        <th>ACCOUNT BALANCE </th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php echo $rows['id'] ?></td>
        <td><?php echo $rows['name'] ?></td>
        <td><?php echo $rows['email'] ?></td>
        <td><?php echo $rows['amount'] ?></td>
      </tr>
    </tbody>
  </table>
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
  <label for="sel1">TRANSFER TO:</label>
  <select class="form-control" id="sel1" name="to">
    <?php
      include 'db.php';
      $sid=$_GET['id'];
      $sql = "SELECT * FROM mytable where id!=$sid";
      $query=mysqli_query($conn,$sql);
      if(!$query)
      {
        echo "Error ".$sql."<br/>".mysqli_error($conn);
      }
      while($rows = mysqli_fetch_array($query)) {
    ?>
    <option value="<?php echo $rows['id'];?>"><?php echo $rows['name'] ;?></option>
  <?php } ?>
  </select>
</div>
</div>

<div class="col-sm-6">
  <label for="sel1">SELECT AMOUNT</label>
  <input type="number" id="amm" class="form-control" name="amount" min="0" required  />
</div>

<div class="col-sm-12">
  <div class="text-center btn3" >
    <button type="submit" name="submit" class="btn btn-success">PROCEED <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
  </div>
</div>

</div>
</div>
<?php include 'foot.php'; ?>