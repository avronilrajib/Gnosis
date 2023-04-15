<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
     <link rel="stylesheet" href="./css/home.css">
     <link rel="stylesheet" href="./css/style.css">
</head>
<body>
  <div class="header">
      <div class="container-fluid">
         <div class="admin-section">
         <div class="row">
              <div class="col-md-2 p-0">
                  <?php
                   require_once("side-bar-student.php");
                  ?>
              </div>
            
         <div class="col-md-10 p-3">
                <div class="new-book">

                <form action="php_core\std_return_book.php?returnBook=true" method="post" >
                    <div class="isuue">
                        <h4>RETURN BOOK</h4>
                    </div>
                        <div class="mb-3 mt-3">
                            <label for="student_name" class="form-label">Student Name:</label>
                            <input type="text" class="form-control" id="email" placeholder="Your Name" name="rt_name" required>
                        </div>
                        <div class="mb-3">
                            <label for="book name" class="form-label">Book Name:</label>
                            <input type="text" class="form-control" id="book_name" placeholder="Book Name" name="rt_book" required>
                        </div>
                       <input type="submit" value="Submit" class="btn btn-primary" name="submit" id="">
                       
                        </form>
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