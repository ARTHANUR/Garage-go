<?php

$server = "localhost";
$username = "root";
$pwd = "";
$database = "garagego";

$con = mysqli_connect($server , $username , $pwd , $database);

if(!$con)
{
    die("error deleting record :".mysqli_error($con));
}


if (isset ($_POST['submit']))
{
    $name = $_POST['name'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $adress = $_POST['adress'];
    $number_plate = $_POST['number_plate'];
    $model = $_POST['model'];
    $colour = $_POST['colour'];
    $pic = $_POST['pic'];
    $problem = $_POST['problem'];
    $emp_id = $_POST['emp_id'];
    $submit_date = $_POST['submit_date'];
    $delivery_date = $_POST['delivery_date'];
    $delivery = $_POST['delivery'];

    $sql = "insert into companydb(name , number , email , adress , number_plate , model , colour , pic , problem , emp_id , submit_date , delivery_date , delivery)values('$name' , '$number' , '$email' , '$adress' , '$number_plate' , '$model' , '$colour' ,'$pic' , '$problem' ,  '$emp_id' ,'$submit_date' , '$delivery_date' , '$delivery')";

    if (mysqli_query($con , $sql))
    {
        echo "<script> alert ('new record inserted')</script>";
    }
    else
    {
        echo "error : ".mysqli_error($con);
    }
    mysqli_close($con);
}






?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company DataBase</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    
<style>
@import url('https://fonts.googleapis.com/css2?family=Handlee&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Rubik+Distressed&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Comic+Neue:ital,wght@1,700&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap');


    body{
        background-color: #FAF8F1;
    }
    h1{
        font-family: 'Handlee', cursive;
        margin-left: 30%;
        margin-top: 30px;
        margin-bottom: 60px;
        font-size: 4rem;
        color: #C58940;
    }
    thead tr th{
        font-family: 'Handlee', cursive;
        font-size: 20px;    
    }
    tbody tr td{
        font-family: 'Roboto', sans-serif;   
    }
    div a{
        text-decoration:none;
        color: #E5BA73;
        font-size: 18px;
        margin-left : 2rem;

    }
</style>


</head>
<body>
    <div>
        <a href="index.html">Home</a>
        <a href="login.html"> Login</a>
        <a href="form.html">Form</a>
    </div>
    <h1>Company DataBase</h1>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Number</th>
      <th scope="col">Email</th>
      <th scope="col">Adress</th>
      <th scope="col">Number_plate</th>
      <th scope="col">Model</th>
      <th scope="col">Colour</th>     
      <th scope="col">Problem</th>
      <th scope="col">E_ID</th>
      <th scope="col">Submit date</th>
      <th scope="col">Delivery date</th>
      <th scope="col">Delivery</th>
    </tr>
  </thead>
  <tbody>

<?php   
    $sql1 = "select * from companydb";
    $query1 = mysqli_query ($con , $sql1);
    
    while($row = mysqli_fetch_array($query1))
    {
    ?>

    <tr>
      
      <td> <?php echo $row['name']; ?> </td>
      <td> <?php echo $row['number']; ?> </td>
      <td> <?php echo $row['email']; ?> </td>
      <td> <?php echo $row['adress']; ?> </td>
      <td> <?php echo $row['number_plate']; ?> </td>
      <td> <?php echo $row['model']; ?> </td>
      <td> <?php echo $row['colour']; ?> </td>
      
      <td> <?php echo $row['problem']; ?> </td>
      <td> <?php echo $row['emp_id']; ?> </td>
      <td> <?php echo $row['submit_date']; ?> </td>
      <td> <?php echo $row['delivery_date']; ?> </td>
      <td> <?php echo $row['delivery']; ?> </td>
      
    </tr>
    <?php } ?>
    
  </tbody>
</table>
    
</body>
</html>


