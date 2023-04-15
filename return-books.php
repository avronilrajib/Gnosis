<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
     integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="./css/style.css">
     <style type="text/css">
    a{
        color:white;
        text-decoration:none;
    }
    a:hover{
        color:black;
        text-decoration:none;
    }
    .student-info-table h2{
        text-align: center;
    }

     </style>

</head>
<body>
<?php 
     require_once("config/configer.php");
    ?>
  <section>
    <div class="container-fluid">
      <div class="admin-section">
       
            <div class="row">
                <div class="col-md-2 col-xxl-2 col-lg-2  p-0">
               <?php
                require_once("side_bar.php");
               ?>
                </div>
                <div class="col-md-10 col-xxl-10 col-lg-10  p-3 mb-auto d-flex justify-content-center">
                <div class="student-info-table">
                    <h2>STUDENT INFO</h2>
                    <div class="container mt-3">  
                    <?php 
    $query="SELECT * FROM `student_login_info`";

    $data_sharing=mysqli_query($connect,$query);
    ?>
    <table class="table table-hover">
    <thead>
    <tr>
        <th>Serial No</th>
        <th>Id</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Password</th>
        <th>Number</th>
        <th>Action</th>
    </tr>
    </thead>
<?php
   $count=0;
    while($row=mysqli_fetch_assoc($data_sharing))
    {
        $id=$row['id'];
        $first=$row['firstName'];
        $last_name=$row['lastName'];
        $email=$row['email'];
        $pass=$row['password'];
        $number=$row['number'];
        $count++;
        ?>
        <tbody>
                        <tr>
                        <td><?php echo $count?></td>
                            <td><?php echo $id?></td>
                            <td><?php echo $first?></td>
                            <td><?php echo $last_name?></td>
                            <td><?php echo $email?></td>
                            <td><?php echo $pass?></td>
                            <td><?php echo $number?></td>
                            <td><a href="student-delete.php?id=<?php echo $id ?>">Delete</a></td>
                            <?php 
                           
                            
                            ?>
                        </tr>
                </tbody>
 <?php    
    }
    
    
    
    ?>        
                    </table>
                    </div>
                </div>
            </div>
        </div>
</div>
</div>
     
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>