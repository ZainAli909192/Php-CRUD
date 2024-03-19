<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <div class="container">
   <div class="row">
     <div class="col-md-10"> 
     <div class="card">
        <div class="card-header">
            <h2>register</h2>
        
</div>
            <div class="card body">
            <form action="" method="post">
    <div class="mb-3 mt-3">
      <label for="email">Email:</label>
      <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" name="email"><br>
    </div>
    <br>
    <div class="mb-3">
      <label for=" first-name">firstName:</label>
      <input type="text" class="form-control" id="name" name="firstname" placeholder="Enter name" >
    </div>
    <br>
    <div class="mb-3">
      <label for="last-name">lastName:</label>
      <input type="text" class="form-control" id="name" name="lastname" placeholder="Enter  last first name" >
    </div>
    <div class="form-check mb-3">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <input type="submit" class="btn btn-primary" value="submit" onclick="success()" name="btn"  />
  </form>
</div>
<?php 
if(isset($_POST['btn']) ){


 $con=new mysqli("localhost","root","","university");
        $fname=$_POST['firstname'];
        $lname=$_POST['lastname'];
        $email=$_POST['email'];

        $sql="insert into admin values('{$fname}','{$lname}','{$email}')";
         $con->query($sql);

}
?>

<script >

  function success(){
    alert("Data is saved successfully")
  }
</script>
  


</body>
</html>

