<?php
$insert =false;
error_reporting(0);
if(isset($_POST['name'])){  

    $server ="localhost";
    $username="root";
    $password="";

    $con = mysqli_connect($server, $username, $password);

    if(!$con){
         die("connection failed ". mysqli_connect_error());
    }
    echo"success";

    $name = $_POST[`Name`];
    $age = $_POST[`Age`];
    $gender = $_POST[`Gender`];
    $emailid = $_POST[`Email`];
    $phone = $_POST[`Phone`];
    $addinfo = $_POST[`Add Info`];
    $sql ="INSERT INTO  'visit' 'visit` (`Name`, `Age`, `Gender`, `Email`, `Phone`, `Add Info`, `Date`)
     VALUES ( 'a', '21', 'female', 'lmn@gmail.com', '2222222222', 'Info', CURRENT_DATE()), ('', '', '', '', '', '', '', CURRENT_DATE());";
    
    echo $sql;
    
    if($con->query($sql) == TRUE){
        // echo "success";
        $insert = true;
    }
    else{
        echo "Error: $sql <br> $con->error";
    }
    
    $con->close();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Industrial Visit</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href = "style.css">

</head>
<body>
    <img class="bg" src = "image.webp">
    <div class = "container">
        <h1>Welcome to the Industrial Visit form</h1>
        <p>Register Now</p>
        <?php 
        if($insert == true){
            echo "$insert";
        }
        echo '<p class="submitmsg">Thank you for your response</p>';
        ?>
        <hr></hr>
        

        <form>
            <input type="text"  name="name" id="name" placeholder = "Enter your Name">
            <input type="text" name="age" id="age" placeholder="Enter your Age">       
            <input type="text" name="gender" id="gender" placeholder="Enter your Gender">
            <input type ="text" name="email" id="email" placeholder="Enter your Email id">
            <input type ="text" name="Phone no" id="Phone no" placeholder="Enter your Phone No">
            <textarea type ="text" name="Additional Information" id="Additional Information " rows="10"  cols="30" placeholder="Enter Additional Information" >
                
            </textarea>
            <button class=" btn">Submit</button>
        </form>


    </div>
    <script src="index.js"></script>
    INSERT INTO `visit` (`Sr No`, `Name`, `Age`, `Gender`, `Email`, `Phone`, `Add Info`, `Date`) VALUES ('2', 'a', '21', 'female', 'lmn@gmail.com', '2222222222', 'Info', CURRENT_DATE()), ('', '', '', '', '', '', '', CURRENT_DATE());
</body>
</html>










