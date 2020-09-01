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
} //connect to database

    $name = $_GET['Name'];
    $query = "SELECT * FROM `user details` where Name='" . $name . "'" ;
    $result = mysqli_query($link, $query);
    ?>
    <!DOCTYPE html>
    <html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
<title>Transfercredits</title>
<h2> <center>Individual User details!</h2>
    <style>
        table,th,td{
            width: 50%;
            border-collapse: collapse;
            border: 2Px solid black;
            height: 50px;
            text-align: center;
            padding: 15px;
 }
 
</style>
</head>
<body>
    <div class="container my-4">

    <table id="myTable">
        <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>CurrentCredits</th>
        </tr>


      <!-- if (result) {
        //echo "Sucess";-->
        <?php
    while($row = mysqli_fetch_assoc($result)) 
    {
    echo "<tr>
      <th scope='row'>".$row['Id']. "</th>
      <td>".$row['Name']. "</td>
      <td>".$row['Email Id']. "</td>
      <td>".$row['Credit']. "</td>

 </tr>";

    }
//}
//else{
  //  echo "Failure";
//}
    echo "</table>";
    $result = mysqli_query($link,$query);
    $row = mysqli_fetch_array($result);
    
    $query = "select Name from `user details` where Name<>'" . $row['Name'] . "'";
    $result = mysqli_query($link,$query);

    if(isset($_POST['transfer'])) {
        if($_POST['credits_tr'] > $row['Credit']) {
            echo "Credits transferred cannot be more than " . $row['credit'] . "<br>";
        }

        else {
            $query = "update `user details` set Credit=Credit-" . $_POST['credits_tr'] . " where Name='" . $row['Name'] . "'";
            mysqli_query($link,$query);

            $query = "update `user details` set Credit=Credit+" . $_POST['credits_tr'] . " where Name='" . $_POST['to_user'] . "'";
            mysqli_query($link,$query);

            header("Location: users.php");
        }
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
    
    
        <title>Transfer Credits</title>

    </head>
       <body>
        <!--<a href="users.php">&lt; Back</a>
        <p>
    <button class='button1' onclick="redirect()">Back</button>
    </p>
    <script>
    function redirect() {
        window.location.href = "users.php";
    }
</script>-->

        
        <form action="#" method="post">
            
            <fieldset>
                <legend> Transfer details</legend>
                Credits: <input type="number" name="credits_tr" min =0 value=1 required>
                <br><br>
                Transfer to: <select name="to_user" required>
                    <option value =""></option>

                <?php
                        while($tname = mysqli_fetch_array($result)) {
                            echo "<option value='" . $tname['Name'] . "'>" . $tname['Name'] . "</option>";
                        }
                ?>

                </select>
                <br>
            </fieldset>
            <br>
           
             <button class='button3' name='transfer'>Transfer</button> <button class='button3' onclick="redirect()">Back</button>
        </form>
        
    <script>
    function redirect() {
        window.location.href = "users.php";
    }
</script>
    </body>
</html>