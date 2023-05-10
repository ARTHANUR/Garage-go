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
else 
{
    echo "connected";
}




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<style>

@import url('https://fonts.googleapis.com/css2?family=Handlee&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Rubik+Distressed&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Comic+Neue:ital,wght@1,700&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap');

/* font-family: 'Handlee', cursive; */
/* font-family: 'Rubik Distressed', cursive;
font-family: 'Comic Neue', cursive; */
/* font-family: 'Roboto', sans-serif; */

    body{
        background-color: #FAF8F1;
    }
    .table{
        padding: 0 50px;
        margin-top: 40px;
    }
    div{
        display: flex;
        
        justify-content: center;
        align-items: center;
        
    }
    div h1{
        font-size: 1.5rem;
        font-family: 'Roboto', sans-serif;
        margin-top: 5px;
        color: #C58940;
        margin-top: 30px;
    }
    div button{
        margin-left: 20px;
    }
    thead tr th{
        color: #E5BA73;
        font-family: 'Handlee', cursive;
        font-size: 20px;
    }
    form{
        margin: 30px;
        margin-left: 600px;
    }
</style>

</head>
<body>



<div>
    <h1>You can check our employee list here : </h1>
    <button class="btn btn-outline-success table-btn">Show Employee</button>
</div>
<div class="table">
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Emp_id</th>
      <th scope="col">Name</th>
      <th scope="col">Contact</th>
      <th scope="col">Email</th>
      <th scope="col">Qualification</th>
      <th scope="col">Experience</th>
      <th scope="col">Place</th>

      
    </tr>
  </thead>
  <tbody>

<?php   
    $sql1 = "select * from employee";
    $query1 = mysqli_query ($con , $sql1);
    
    while($row = mysqli_fetch_array($query1))
    {
    ?>

    <tr>
      
      <td> <?php echo $row['emp_id']; ?> </td>
      <td> <?php echo $row['emp_name']; ?> </td>     
      <td> <?php echo $row['emp_contact']; ?> </td>
      <td> <?php echo $row['emp_email']; ?> </td>
      <td> <?php echo $row['emp_qualification']; ?> </td>
      <td> <?php echo $row['emp_experience']; ?> </td>
      <td> <?php echo $row['emp_place']; ?> </td>
      
      
      
    </tr>
    <?php } ?>
    
  </tbody>
</table>
</div>



<?php

if(isset($_POST['submit']))
{
    $num_plate = $_POST['num_plate'];
    

    $sql = "SELECT `name`, `number`, `email`, `adress`, `number_plate`, `model`, `colour`, `problem`, `emp_id`, `submit_date`, `delivery_date`, `delivery` FROM `companydb` WHERE number_plate = '$num_plate'";
    $query = mysqli_query($con , $sql);

    if(mysqli_query($con , $sql))
    {
        
        while($row = mysqli_fetch_array($query))
        {
            echo "<p>".$row['name']."</p>";
        }
    }
    else {
        echo "<p>fuckkkkkkkk</p>";
    }
}




?>




<script>
    let table = document.querySelector(".table")
    let tableBtn = document.querySelector(".table-btn")

    table.style.display = "none"

    tableBtn.addEventListener("click" , function(){
        if(table.style.display != "none")
        {
            table.style.display = "none"
            tableBtn.innerHTML = "Show Employee"
        }
        else{
            table.style.display = "block"
            tableBtn.innerHTML = "hide"
        }
    })
</script>

</body>
</html>