<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>username</title>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity=""></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="profile.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@1,300&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Sacramento&family=Ubuntu&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/6f9eecfe58.js" crossorigin="anonymous"></script>
</head>

<body>
  <section id="title">

    <div class="container-fluid">
      <!-- Nav Bar -->
      <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="">Name</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="search.html">search</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php">Logout</a>
            </li>
          </ul>
        </div>
      </nav>
  </section>
  <?php
  $connect = mysqli_connect('localhost', 'root', 'root', 'alumni');
  $result = mysqli_query($connect, "SELECT * from temp");
  $record = mysqli_fetch_assoc($result);
  $id = $record['Alum_id'];
  ?>

  <section id="info">
    <div class="table">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">Alumini_id</th>
            <th scope="col">Name</th>
            <th scope="col">Course</th>
            <th scope="col">Cgpa</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <?php
            $query = "SELECT * from alum where Alum_id = '{$id}'";
            $result = mysqli_query($connect, $query);
            $record = mysqli_fetch_assoc($result);
            echo '<th scope="row">' . $id . '</th>';
            echo '<td>' . $record['Name'] . '</td>';
            echo '<td>' . $record['Branch'] . '</td>';
            echo '<td>' . $record['CGPA'] . '</td>';
            ?>
          </tr>
        </tbody>
      </table>
    </div>

    <div class="table">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">Alumini_id</th>
            <th scope="col">Mobile.no</th>
            <th scope="col">email</th>
            <th scope="col">Linkdin</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <?php
            $query = "SELECT * from contact where Alum_id = '{$id}'";
            $result = mysqli_query($connect, $query);
            $record = mysqli_fetch_assoc($result);
            echo '<th scope="row">' . $id . '</th>';
            echo '<td>' . $record['mobile_no'] . '</td>';
            echo '<td>' . $record['email'] . '</td>';
            echo '<td>' . $record['linkedin'] . '</td>';
            ?>
          </tr>
        </tbody>
      </table>
    </div>

    <div class="table">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">Alumini_id</th>
            <th scope="col">Society_Name</th>
            <th scope="col">Position</th>
            <th scope="col">Society_type</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $query = "SELECT * from society where Alum_id = '{$id}'";
          $result = mysqli_query($connect, $query);
          while ($record = mysqli_fetch_assoc($result)) {
            # code...
            echo '<tr>';
            echo '<th scope="row">' . $id . '</th>';
            echo '<td>' . $record['s_name'] . '</td>';
            echo '<td>' . $record['position'] . '</td>';
            echo '<td>' . $record['s_type'] . '</td>';
            echo '</tr>';
          };
          ?>
        </tbody>
      </table>
    </div>
  </section>




</body>

</html>