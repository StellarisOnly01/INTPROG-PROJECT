<?php

session_start();

$cook = $_COOKIE['cook'] ?? 'Unknown';
$newcook = filter_var($cook, FILTER_SANITIZE_STRING); 

include("db/db.php");


// if(!isset($user_id)){
//     header('location:login-register.php');
// };

$id = isset($_SESSION['id']) ? $_SESSION['id'] : ""; 
$name = isset($_SESSION['Name']) ? $_SESSION['Name'] : ""; 
$email = isset($_SESSION['email']) ? $_SESSION['email'] : ""; 
$address = isset($_SESSION['adds']) ? $_SESSION['adds'] : "";
$contactnum = isset($_SESSION['contactnumber']) ? $_SESSION['contactnumber'] : "";


// if(isset($_POST['updname']))
//     {
//         $upname = mysqli_real_escape_string($con, $_POST['username']);

//         $select = mysqli_query($con, "UPDATE users SET name = '$upname' WHERE ID = '$id'") 
//         or die('query failed');
//     }


    if (isset($_POST['updname'])) {
        $upname = mysqli_real_escape_string($con, $_POST['username']);
        $update_name_query = "UPDATE users SET name = ? WHERE ID = ?";
        $stmt = mysqli_prepare($con, $update_name_query);
        mysqli_stmt_bind_param($stmt, "si", $upname, $id);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Register</title>

   <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&family=Space+Grotesk:wght@300&display=swap" rel="stylesheet">
  
    <link rel="stylesheet" href="style.css">
   <!-- <link rel="stylesheet" href="css/style.css"> -->
  
</head>
<body>
<?php

if(isset($message)){
   foreach($message as $message){
      echo '<div class="message" onclick="this.remove();">'.$message.'</div>';
   }
}
?>
<?php
    //    $select_user = mysqli_query($con, "SELECT * FROM users WHERE ID = '$user_id'") or die('query failed');
    //    if(mysqli_num_rows($select_user) > 0){
    //      $fetch_user = mysqli_fetch_assoc($select_user);
    //    };
    ?>
<div class="header">

        <div class="container">
        <div class="navbar">
            <div class="logo">
                <a href="file/home-user.php"><img src="images/logo.png" width="45px"></a>
                </div>
                <nav> 
                    <ul id="MenuItems">
                        <li><a href="file/home-user.php">Home</a></li>
                        <li><a href="file/product-user.php">Product</a></li>
                        <li><a href="file/about us-user.php">About</a></li>
                        <li><a href="file/contact-user.php">Contact</a></li>
                        <li><a href="account.php">Account</a></li>
                    </ul>
                </nav>
                <a href="for cart.html"><img src="cart.png"></a>
                <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
            </div>
</div>
   
                <!-- ito yung lalagyan ng css pati ng responsive ben -->
                <form action="" method="POST">
                <h1>WELCOME</h1>
                <input type="text" name="username"  placeholder="name"> 
                <input type="text" name="username"  placeholder="email"> 
                <input type="text" placeholder="Contact Number:">
                <?php echo $contactnum; ?></p>
                <br>
                <textarea id="" cols="25" rows="7" placeholder="Your Message"><?php echo $address; ?></textarea>
                <button name="updadd">UPDATE</button>
                <br><br>
                </form>

                <a href="home.php" name="logout" onclick="return confirmLogout()"><?php  session_unset(); session_destroy();?>Log out</a>

                <script>
                    function confirmLogout() {
                        return confirm("Are you sure you want to logout?");
                    }
                </script>


             
                    

                 <br><br><br><br><br><br><br><br><br><br><br>
                 <br><br><br><br><br><br><br><br>

      



<style>
    ::placeholder {
  color: #9400d3;
  font-size: 15px;
}
    .accoutpage{
        background: white;
        width: 100%;
    }

</style>


<!--FOOTER-->
<div class="footer">
                    <div class="container">
                        <div class="row">
                            <div class="footer-col-1">
                                <h3> Download Our App </h3>
                                <div class="app-logo">
                                    <img src="images/PS.png">
                                    <img src="images/AS.png">
                                </div>
                            </div>
                            <div class="footer-col-2">
                                <img src="images/logo.png" width="45px">
                                <p> STORE THAT SUPPORT ALL KINDS OF STYLE AND PREFERENCE </p>
                            </div>
                            <div class="footer-col-3">
                                <h3> LINKS </h3>
                                <ul>
                                    <li> Coupons </li>
                                    <li> Return Policy</li>
                                </ul>
                            </div>
                            <div class="footer-col-4">
                                <h3> Follow Us </h3>
                                <ul>
                                    <li> Facebook </li>
                                    <li> Twitter</li>
                                    <li> Instagram </li>
                                    <li> Youtube </li>
                                </ul>
                            </div>
                        </div>
                        <hr>
                        <p class="bottom"> EFFULGENT APPR. || Best Apparel Online Store </p>
                    </div>
                </div>


<!-- custom js file link  -->
<script src="js/script.js"></script>

<script>
                    var LoginForm=document.getElementById("LoginForm");
                    var RegForm=document.getElementById("RegForm");
                    var Indicator=document.getElementById("Indicator");

                    function register(){
                        RegForm.style.transform="translateX(0px)";
                        LoginForm.style.transform="translateX(0px)";
                        Indicator.style.transform="translateX(100px)";
                    }
                    function login(){
                        RegForm.style.transform="translateX(300px)";
                        LoginForm.style.transform="translateX(300px)";
                        Indicator.style.transform="translateX(0px)";
                    }


                </script>

</body>

</html>