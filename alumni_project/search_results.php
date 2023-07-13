<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity=""></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="search_results.css">
  <title>Document</title>
</head>

<body>
  <?php
  if (!empty($_POST["society"])) {
    $society = $_POST["society"];
    $connect = mysqli_connect('localhost', 'root', 'root', 'alumni');
    $query = "SELECT alum.* from alum where alum.Alum_id in (select society.Alum_id from society where society.s_name = '{$society}')";
    $result = mysqli_query($connect, $query);

    if (mysqli_num_rows($result) == 0) {
      echo '<h1> No records match your query. </h1>';
    } else {
      echo '<div class="table" style="padding: 7% 15%; text-align: center;">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th scope="col">Alumini_id</th>
                  <th scope="col">Name</th>
                  <th scope="col">Graduation Year</th>
                  <th scope="col">Cgpa</th>
                  <th scope="col">Course</th>
                  <th scope="col">Company</th>
                </tr>
              </thead>
              <tbody>';
      while ($record = mysqli_fetch_assoc($result)) {
        # code...
        echo '<tr>';
        echo '<th scope="row">' . $record['Alum_id'] . '</th>';
        echo '<td>' . $record['Name'] . '</td>';
        echo '<td>' . $record['Graduation_year'] . '</td>';
        echo '<td>' . $record['CGPA'] . '</td>';
        echo '<td>' . $record['Branch'] . '</td>';
        echo '<td>' . $record['Employment'] . '</td>';
        echo '</tr>';
      };
      echo '</tbody>
            </table>
          </div>';
    }
  } elseif (!empty($_POST["company"])) {
    $company = $_POST["company"];
    $connect = mysqli_connect('localhost', 'root', 'root', 'alumni');
    $query = "SELECT * FROM alum WHERE Employment = '{$company}'";
    $result = mysqli_query($connect, $query);

    if (mysqli_num_rows($result) == 0) {
      echo '<h1> No records match your query. </h1>';
    } else {
      echo '<div class="table" style="padding: 7% 15%; text-align: center;">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th scope="col">Alumini_id</th>
                  <th scope="col">Name</th>
                  <th scope="col">Graduation Year</th>
                  <th scope="col">Cgpa</th>
                  <th scope="col">Course</th>
                </tr>
              </thead>
              <tbody>';
      while ($record = mysqli_fetch_assoc($result)) {
        # code...
        echo '<tr>';
        echo '<th scope="row">' . $record['Alum_id'] . '</th>';
        echo '<td>' . $record['Name'] . '</td>';
        echo '<td>' . $record['Graduation_year'] . '</td>';
        echo '<td>' . $record['CGPA'] . '</td>';
        echo '<td>' . $record['Branch'] . '</td>';
        echo '</tr>';
      };
      echo '</tbody>
            </table>
          </div>';
    }
  } elseif (!empty($_POST["branch"])) {
    $branch = $_POST["branch"];
    $connect = mysqli_connect('localhost', 'root', 'root', 'alumni');
    $query = "SELECT * FROM alum WHERE Branch = '{$branch}'";
    $result = mysqli_query($connect, $query);

    if (mysqli_num_rows($result) == 0) {
      echo '<h1> No records match your query. </h1>';
    } else {
      echo '<div class="table" style="padding: 7% 15%; text-align: center;">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th scope="col">Alumini_id</th>
                  <th scope="col">Name</th>
                  <th scope="col">Graduation Year</th>
                  <th scope="col">Cgpa</th>
                  <th scope="col">Company</th>
                </tr>
              </thead>
              <tbody>';
      while ($record = mysqli_fetch_assoc($result)) {
        # code...
        echo '<tr>';
        echo '<th scope="row">' . $record['Alum_id'] . '</th>';
        echo '<td>' . $record['Name'] . '</td>';
        echo '<td>' . $record['Graduation_year'] . '</td>';
        echo '<td>' . $record['CGPA'] . '</td>';
        echo '<td>' . $record['Employment'] . '</td>';
        echo '</tr>';
      };
      echo '</tbody>
            </table>
          </div>';
    }
  } elseif (!empty($_POST["year"])) {
    $year = $_POST["year"];
    $connect = mysqli_connect('localhost', 'root', 'root', 'alumni');
    $query = "SELECT * FROM alum WHERE Graduation_year = '{$year}'";
    $result = mysqli_query($connect, $query);
    if (mysqli_num_rows($result) == 0) {
      echo '<h1> No records match your query. </h1>';
    } else {
      echo '<div class="table" style="padding: 7% 15%; text-align: center;">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th scope="col">Alumini_id</th>
                  <th scope="col">Name</th>
                  <th scope="col">Course</th>
                  <th scope="col">Cgpa</th>
                  <th scope="col">Company</th>
                </tr>
              </thead>
              <tbody>';
      while ($record = mysqli_fetch_assoc($result)) {
        # code...
        echo '<tr>';
        echo '<th scope="row">' . $record['Alum_id'] . '</th>';
        echo '<td>' . $record['Name'] . '</td>';
        echo '<td>' . $record['Branch'] . '</td>';
        echo '<td>' . $record['CGPA'] . '</td>';
        echo '<td>' . $record['Employment'] . '</td>';
        echo '</tr>';
      };
      echo '</tbody>
            </table>
          </div>';
    }
  }
  ?>

</body>

</html>