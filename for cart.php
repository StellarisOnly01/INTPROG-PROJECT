<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>|| ALL PRODUCTS ||</title>

    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&family=Space+Grotesk:wght@300&display=swap" rel="stylesheet">

    </head>

    <body>
    
        <div class="container">
        <div class="navbar">
            <div class="logo">
                <a href="home.html"><img src="logo.png" width="45px"></a>
                </div>
                <nav> 
                    <ul id="MenuItems">
                        <li><a href="home.html">Home</a></li>
                        <li><a href="product.html">Product</a></li>
                        <li><a href="about us.html">About</a></li>
                        <li><a href="contact.html">Contact</a></li>
                        <li><a href="login-regis.php">Account</a></li>
                    </ul>
                </nav>
                <a href="for cart.html"><img src="cart.png"></a>
                <img src="menu.png" class="menu-icon" onclick="menutoggle()">
            </div>
            </div>
            
    <!-- FOR CART ITEMS -->
            <div class="small-container cart-page">
                <table>
                    <tr>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th>Subtotal</th>
                    </tr>
                    <tr>
                        <td>
                            <div class="cart-info">
                                <img src="product1.jpg">
                                <div>
                                    <p>Black Shoes</p>
                                    <small>Price: ₱2999.00</small>
                                    <br>
                                    <a href="">Remove</a>
                                </div>
                            </div>
                        </td>
                        <td><input type="number" value="1"></td>
                        <td>₱2999.00</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="cart-info">
                                <img src="product1.jpg">
                                <div>
                                    <p>Black Shoes</p>
                                    <small>Price: ₱2999.00</small>
                                    <br>
                                    <a href="">Remove</a>
                                </div>
                            </div>
                        </td>
                        <td><input type="number" value="1"></td>
                        <td>₱2999.00</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="cart-info">
                                <img src="product1.jpg">
                                <div>
                                    <p>Black Shoes</p>
                                    <small>Price: ₱2999.00</small>
                                    <br>
                                    <a href="">Remove</a>
                                </div>
                            </div>
                        </td>
                        <td><input type="number" value="1"></td>
                        <td>₱2999.00</td>
                    </tr>
                </table>

                <div class="total-price">
                    <table>
                        <tr>
                            <td>Subtotal</td>
                            <td>₱2999.00</td>
                        </tr>
                        <tr>
                            <td>Tax</td>
                            <td>₱2999.00</td>
                        </tr>
                        <tr>
                            <td>Total</td>
                            <td>₱2999.00</td>
                        </tr>
                    </table>
                </div>


            </div>


               <!--FOOTER-->
                <div class="footer">
                    <div class="container">
                        <div class="row">
                            <div class="footer-col-1">
                                <h3> Download Our App </h3>
                                <div class="app-logo">
                                    <img src="PS.png">
                                    <img src="AS.png">
                                </div>
                            </div>
                            <div class="footer-col-2">
                                <img src="logo.png" width="45px">
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

                <!--js for toggle menu-->

                <script>  
                    var MenuItems=document.getElementById("MenuItems");

                    MenuItems.style.maxHeight= "0px";

                    function menutoggle(){
                        if(MenuItems.style.maxHeight == "0px")
                        {
                            MenuItems.style.maxHeight = "200px";
                        }
                        else
                        {
                            MenuItems.style.maxHeight = "0px";
                        }
                    }
                </script>

    </body>
    </html>