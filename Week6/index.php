<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ontario Public Schools</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
  <?php include('reusable/nav.php'); ?> 
  <div class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col">
          <h1 class="display-4 mt-5 mb-5">All Schools</h1>
        </div>
      </div>
    </div>
  </div>
  
  <?php 
      include('inc/functions.php');
      $connect = mysqli_connect('localhost', 'root', 'root', 'phpweek6');
      if(!$connect){
        die("Connection Failed: " . mysqli_connect_error());
      }
      $query = 'SELECT * FROM schools';
      $schools = mysqli_query($connect, $query);
      
  ?>

  <div class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col">
          <?php 
          get_message();
           ?>
        </div>
        <?php
          foreach($schools as $school){
            echo '<div class="col-md-4 mt-2 mb-2">
                    <div class="card ' . $bgClass . '">
                        <div class="card-body">
                            <h5 class="card-title">' . $school['School Name'] . '</h5>
                            <p class="card-text">' . $school['School Level'] . '</p>
                            <span class="badge bg-secondary">' . $school['Phone'] . '</span>
                            <span class="badge bg-info">' . $school['Email'] . '</span>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col">
                                    <form action="update.php">
                                        <input type="hidden" name="id" value=" ' . $school['id'] . '">
                                        <button type="submit" name="updateSchool" class="btn btn-sm btn-primary">Update</button>
                                    </form>
                                </div>
                                <div class="col">
                                    <form action="inc/deleteSchool.php">
                                        <input type="hidden" name="id" value=" ' . $school['id'] . '">
                                        <button type="submit" name="deleteSchool" method="GET" class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>';
          }
        ?>
      </div>
    </div>
  </div>


</body>
</html>