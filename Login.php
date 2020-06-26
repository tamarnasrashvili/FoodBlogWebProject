<html>
    <head>
       <link rel="stylesheet" href="Css/style.css">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <script type="text/javascript" src="JS/JScripts.js"></script>  

    </head>
    <body>

            <header>
                <div class="container">
                    <div class="left-side">
                        <img class="logo" src="Img/blog_logoEdit.png" alt="">
                    </div>

                    <div class="right-side">

                        <nav class="topnav" id="myTopnav">
                            <a class="active" href="Index.html">Home</a>
                            <a href="Category.html">Best foods</a>
                            <a href="AboutUs.html">About Us</a>
                            <a href="ContactUs.html">Contact Us</a>
                              <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                                <i class="fa fa-bars"></i>
                              </a>                        
                            </nav>
                    </div>
                </div>
            </header>
            <div class="main-content">
                <h2>Login Form</h2>

                <form action="/action_page.php" method="post">
                <div class="imgcontainer">
                    <img src="./Img/avatar.webp" alt="Avatar" class="avatar">
                </div>

                <div class="container">
                    <label for="uname"><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" name="uname" required>

                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="psw" required>
                        
                    <button type="submit">Login</button>
                    <label>
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                    </label>
                </div>

                <div class="container" style="background-color:#f1f1f1">
                    <button type="button" class="cancelbtn">Cancel</button>
                    <span class="psw">Forgot <a href="#">password?</a></span>
                </div>
                </form>
            </div>
            <footer class="footer">
                <div class="footer-container">
                    <div class="logo">
                        <img src="img/logoFooter.png" alt="Footer Logo">
                    </div>
                    <ul class="footer-nav">
                        <li>
                            <a class="active" href="Index.html">Home</a>
                        </li>
                        <li>
                            <a href="Category.html">Best foods</a>
                        </li>
                        <li>
                            <a href="AboutUs.html">About Us</a>
                        </li>
                        <li>
                            <a href="ContactUs.html">Contact Us</a>
                        </li>
                            
                    </ul>
                    <div class="contact-block">
                        <h3>We're happy to hear from you!</h3>
                        <a href="#" ><i class="fas fa-phone"></i>  (+995) 591 184 002</a>
                        <a href="#" >tamar.nasrashvili0@gmail.com</a>
                    </div>
                    <div class="newsletter">
                        <div class="newsletter-text">
                            <div class="icon">
                                <i class="fas fa-paper-plane"></i>
                            </div>
                            <p>
                                Subscribe to our Newsletter
                            </p>
                        </div>
                        <!--
                        <div class="text-input">
                            <form >
                                <input placeholder="Enter Your Email Address" size="20">
                                <input type="submit" value="Submit">
                            </form>
                        </div>
                        -->

                    </div>
                    <div class="social-networks">
                        <h3>Share our content!</h3>
                        <div class="facebook">
                            <i class="fab fa-facebook"></i>
                        </div>
                        <div class="twitter">
                            <i class="fab fa-twitter"></i>
                        </div>
                        <div class="instagram">
                            <i class="fab fa-instagram"></i>
                        </div>
                    </div>
                </div>
            </footer>


    </body>
</html>

