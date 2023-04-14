<!doctype html>
<html lang="en">
  <head>
    <title>Admin pennel</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
     integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <link rel="stylesheet" href="./css/style.css">

  </head>
  <body>
    <?php 
     $connect=mysqli_connect('localhost','root','','library');
     $query="SELECT * FROM `student_login_info`";
 
     $data_sharing=mysqli_query($connect,$query);
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
     }
    
    ?>
    <div class="header">
        <div class="container-fluid">
        
           <div class="admin-section">
               <div class="row " >
                  <div class="col-md-2 p-0">
                   <?php
                   require_once("side-bar-student.php");
                   ?>
                 </div>
                <div class="col-md-10">
                    <div class="row">
                   
                      <div class="col-md-4">
                        <div class="card-body book-count">
                       <h4 class="icon"> <i class="fa-solid fa-book icon-dada"></i></h4>
                         <div class="card-text">
                         <h4 class='count'><?php 
                          $q="SELECT COUNT(*) FROM add_book";
                          $cnt=mysqli_fetch_assoc(mysqli_query($connect,$q));
                               echo $cnt['COUNT(*)'];
                          ?></h4>
                           <h4 class='title' >Total BOOKS</h4>
                         </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="card-body student-count">
                       <h4 class="icon"> <i class="fa-solid fa-graduation-cap icon-dada"></i></h4>
                          <div class="card-text">
                         <h4 class='count'><?php 
                          $q="SELECT COUNT(*) FROM student_login_info";
                          $cnt=mysqli_fetch_assoc(mysqli_query($connect,$q));
                               echo $cnt['COUNT(*)'];
                          ?></h4>
                           <h4 class='title' >REQUEST BOOK</h4>
                         </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="card-body issue-book-count">
                          <h4 class="icon"><i class="fa-solid fa-triangle-exclamation"></i></h4>
                         <div class="card-text">
                         <h4 class='count'><?php 
                          $q="SELECT COUNT(*) FROM `student-issue-book`";
                          $cnt=mysqli_fetch_assoc(mysqli_query($connect,$q));
                               echo $cnt['COUNT(*)'];
                          ?></h4>
                           <h4 class='title' >Total Issues</h4>
                         </div>
                        </div>
                      </div>
                    </div>
  
                      </div>
                      <div class="row">
                      <div class="col-md-12">
                        <div class="graph">
                          <img src="./image/graph.jpg" alt="">
                        </div>
                      </div>
                    </div>
                   
                    </div>
                </div>
            </div>
           </div>
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