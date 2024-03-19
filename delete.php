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
                       <h2>Delete data</h2>
                   </div>
                   <div class="card-body">
                       <?php 
                        // Check if ID is set
                        if(isset($_GET['id'])) {
                            $con = new mysqli("localhost", "root", "", "university");
                            $email = $_GET['id'];
                            $sql = "SELECT * FROM admin WHERE Email = '{$email}'";
                            $result = $con->query($sql);
                            if ($result->num_rows > 0) {
                                $row = $result->fetch_assoc();
                                // Display data
                       ?>
                                <form method="post">
                                    <div class="mb-3 mt-3">
                                        <label for="email">Email:</label>
                                        <input type="email" class="form-control" name="email" id="id" placeholder="Enter email" name="email" value="<?php echo $row['Email']; ?>" ><br>
                                    </div>
                                    <br>
                                    <div class="mb-3">
                                        <label for="first-name">First Name:</label>
                                        <input type="text" class="form-control" id="name" name="firstname" placeholder="Enter name" value="<?php echo $row['firstname']; ?>" >
                                    </div>
                                    <br>
                                    <div class="mb-3">
                                        <label for="last-name">Last Name:</label>
                                        <input type="text" class="form-control" id="name" name="lastname" placeholder="Enter last first name" value="<?php echo $row['lastname']; ?>" >
                                    </div>
                                    <input type="submit" class="btn btn-primary" value="submit" name="btn"  />
                                </form>
                       <?php 
                            } else {
                                echo "No user found.";
                            }
                        } else {
                            echo "ID not provided.";
                        }
                       ?>
                   </div>
               </div>
           </div>
       </div>
   </div>

<?php if(isset($_POST['btn']) ){
    if(isset($_GET['id'])) {
        $con=new mysqli("localhost","root","","university");
        $email=$_GET['id'];
        $sql="DELETE FROM admin WHERE Email='{$email}'";
        $con->query($sql);
        // Redirect to some page after deletion
        header("Location: index.php");
        exit();
    }
} ?>

</body>
</html>
