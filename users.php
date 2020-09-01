<?php 
$servername = "localhost";
$username = "root";
$password = "";
$link = "user details";

//create a connection
$link = mysqli_connect($servername, $username, $password ,$link);

//Die if connection was not successful
if (!$link) {
  die("Sorry we failed to connect:". mysqli_connect_error());
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    

<title>Credit Management</title>
<h1><center>User details!</h1>
  <a href="index.php">&lt; Back</a>
  <body>
<div class="container my-4">

<table class="table" id="myTable">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email Id</th>
      <th scope="col">Credit</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
<?php 
$sql = "SELECT * FROM `user details`";
$result = mysqli_query($link, $sql);
while($row = mysqli_fetch_assoc($result)){
  echo "<tr>
      <th scope='row'>".$row['Id']. "</th>
      <td>".$row['Name']. "</td>
      <td>".$row['Email Id']. "</td>
      <td>".$row['Credit']. "</td>
      <td> <a href =transfer.php?Name=".$row['Name']."><button class=' btn btn-sm btn-primary select'> select </button> </a> </td>
    </tr>";

}
?>
    
   
  </tbody>
</table>
</div>
</body>
</head>
</html>

