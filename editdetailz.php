<!DOCTYPE html>
<html>
<title>Home | SOA Alumni Network</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
        body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-family: "Merriweather"
    }
    
    .w3-row-padding img {
        margin-bottom: 12px
    }
    /* Set the width of the sidebar to 120px */
    
    .w3-sidebar {
        width: 120px;
        background: #222;
    }
    /* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
    
    #main {
        margin-left: 120px
    }
    /* Remove margins from "page content" on small screens */
    
    @media only screen and (max-width: 600px) {
        #main {
            margin-left: 0
        }
    }
    
    * {
        box-sizing: border-box;
    }
    
    .mySlides {
        display: none;
    }
    
    img {
        vertical-align: middle;
    }
    /* Slideshow container */
    
    .slideshow-container {
        max-width: 1000px;
        position: relative;
        margin: auto;
    }
    /* Caption text */
    
    .text {
        color: #f2f2f2;
        font-size: 15px;
        padding: 8px 12px;
        position: absolute;
        bottom: 8px;
        width: 100%;
        text-align: center;
    }
    /* Number text (1/3 etc) */
    
    .numbertext {
        color: #f2f2f2;
        font-size: 12px;
        padding: 8px 12px;
        position: absolute;
        top: 0;
    }
    /* The dots/bullets/indicators */
    
    .dot {
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbb;
        border-radius: 50%;
        display: inline-block;
        transition: background-color 0.6s ease;
    }
    
    .active {
        background-color: #717171;
    }
    /* Fading animation */
    
    .fade {
        -webkit-animation-name: fade;
        -webkit-animation-duration: 1.5s;
        animation-name: fade;
        animation-duration: 1.5s;
    }
    
    @-webkit-keyframes fade {
        from {
            opacity: .4
        }
        to {
            opacity: 1
        }
    }
    
    @keyframes fade {
        from {
            opacity: .4
        }
        to {
            opacity: 1
        }
    }
    /* On smaller screens, decrease text size */
    
    @media only screen and (max-width: 300px) {
        .text {
            font-size: 11px
        }
    }
    
    textarea {
        width: 100%;
        height: 150px;
        padding: 12px 20px;
        box-sizing: border-box;
        border: 2px solid #ccc;
        border-radius: 4px;
        background-color: #f8f8f8;
        font-size: 16px;
        resize: none;
</style>

<body class="w3-black">

    <!-- Icon Bar (Sidebar - hidden on small screens) -->
    <nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
        <!-- Avatar image in top left corner -->
        <a href="https://www.soa.ac.in/iter" target="_blank" class="w3-hover-text-green"><img src="imgsidebar2.jpg" style="width:100%"></a>
        <a href="file:///C:/Users/sudee/OneDrive/Desktop/SOA%20Home/Homepage.html" class="w3-bar-item w3-button w3-padding-large w3-black">
            <i class="fa fa-sign-in w3-xxlarge"></i>
            <p>SIGN IN</p>
        </a>
        <a href="file:///C:/Users/sudee/OneDrive/Desktop/SOA%20Home/Homepage.html#home" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
            <i class="fa fa-home w3-xxlarge"></i>
            <p>HOME</p>
        </a>
        <a href="file:///C:/Users/sudee/OneDrive/Desktop/SOA%20Home/Homepage.html#events" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
            <i class="fa fa-calendar w3-xxlarge"></i>
            <p>EVENTS</p>
        </a>
        <a href="file:///C:/Users/sudee/OneDrive/Desktop/SOA%20Home/Homepage.html#about" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
            <i class="fa fa-user w3-xxlarge"></i>
            <p>ABOUT</p>
        </a>
        <a href="file:///C:/Users/sudee/OneDrive/Desktop/SOA%20Home/Homepage.html#photos" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
            <i class="fa fa-eye w3-xxlarge"></i>
            <p>PHOTOS</p>
        </a>
        <a href="file:///C:/Users/sudee/OneDrive/Desktop/SOA%20Home/Homepage.html#contact" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
            <i class="fa fa-envelope w3-xxlarge"></i>
            <p>CONTACT</p>
        </a>
        <a href="#register" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
            <i class="fa fa-pencil-square w3-xxlarge"></i>
            <p>REGISTER</p>
        </a>
        <a href="https://github.com/Sudeep25022000/Alumini-System-Hackerwar2020-" target="_blank" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
            <i class="fa fa-code w3-xxlarge"></i>
            <p>GEEKCODE</p>
        </a>
    </nav>

    < <!-- Page Content -->
        <div class="w3-padding-large" id="main">
            <!-- Header/Home -->
            <header class="w3-container w3-padding-32 w3-center w3-light-grey" id="home">

                <h3 class="w3-jumbo w3-blue ">Siksha 'O' Anusandhan<br>
                    <h4 class="w3-text-black w3-light-grey ">(Deemed to be University)</h4>
                </h3>
                <p class="w3-text-green w3-arial"><b><h3 style="color:green">Welcome to Alumni Portal of ITER | Institute of Technical Education and Research</h3> </b></p>
                <div class="slideshow-container">

                    <div class="mySlides fade">
                        <div class="numbertext">1 / 6</div>
                        <img src="imghome1.jpg" style="width:100%">
                        <!--<div class="text w3-center w3-text-black"><b>Institute of Technical Education and Research<br>Jagamara,Khandagiri,Bhubaneswar-30</b></div>-->
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">2 / 6</div>
                        <img src="imghome2.jpg" style="width:100%">
                        <!--<div class="text w3-center w3-text-black"><b>Institute of Technical Education and Research<br>Jagamara,Khandagiri,Bhubaneswar-30</b></div>-->
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">3 / 6</div>
                        <img src="imghome3.jpg" style="width:100%">
                        <!--<div class="text w3-center w3-text-black"><b>Institute of Technical Education and Research<br>Jagamara,Khandagiri,Bhubaneswar-30</b></div>-->
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">4 / 6</div>
                        <img src="imghome5.jpg" style="width:100%">
                        <!--<div class="text w3-center w3-text-black"><b>Institute of Technical Education and Research<br>Jagamara,Khandagiri,Bhubaneswar-30</b></div>-->
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">5 / 6</div>
                        <img src="imghome6.jpg" style="width:100%">
                        <!--<div class="text w3-center w3-text-black"><b>Institute of Technical Education and Research<br>Jagamara,Khandagiri,Bhubaneswar-30</b></div>-->
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">6 / 6</div>
                        <img src="imghome7.jpg" style="width:100%">
                        <!--<div class="text w3-center w3-text-green"><b>Institute of Technical Education and Research<br>Jagamara,Khandagiri,Bhubaneswar-30</b></div>-->
                    </div>

                </div>
                <br>

                <div style="text-align:center">
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                </div>

                <script>
                    var slideIndex = 0;
                    showSlides();

                    function showSlides() {
                        var i;
                        var slides = document.getElementsByClassName("mySlides");
                        var dots = document.getElementsByClassName("dot");
                        for (i = 0; i < 6; i++) {
                            slides[i].style.display = "none";
                        }
                        slideIndex++;
                        if (slideIndex > slides.length) {
                            slideIndex = 1
                        }
                        for (i = 0; i < 6; i++) {
                            dots[i].className = dots[i].className.replace(" active", "");
                        }
                        slides[slideIndex - 1].style.display = "block";
                        dots[slideIndex - 1].className += " active";
                        setTimeout(showSlides, 3000); // Change image every 3 seconds
                    }
                </script>
            </header>



            <div class="w3-padding-64 w3-content w3-text-grey">
                <h2 class="w3-text-light-grey">Update info:</h2>
                <p>Update profile for better track.</p>
                <form action="/action_page.php" target="_blank">
                    <br>
                    <h4 class="w3-text-light-grey">1. Personal Information details :</h4>
                    <p>----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
                    <p><input class="w3-input w3-padding-16 " type="text" width="50px" placeholder=" Fullname " required name="name "></p>
                    <p><input class="w3-input w3-padding-16" type="text" width="50px" placeholder=" DOB(ddmmyy) " required name="dob"></p>
                    <p><input class="w3-input w3-padding-16" type="text" width="50px" placeholder=" Gender(Example: Male/Female/Others) " required name="gender"></p>
                    <p><input class="w3-input w3-padding-16" type="text" width="50px" placeholder=" Contact +91 " required name="contact"></p>
                    <p><input class="w3-input w3-padding-16" type="text" width="50px" placeholder="Email" required name="email"></p>
                    <br>
                    <h4 class="w3-text-light-grey">2.Permanent Address details:</h4>
                    <p>----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
                    <p><input class="w3-input w3-padding-16 " type="text" width="50px" placeholder=" State " required name="state "></p>
                    <p><input class="w3-input w3-padding-16" type="text" width="50px" placeholder=" District " required name="district"></p>
                    <p><input class="w3-input w3-padding-16" type="text" width="50px" placeholder=" House/Door/Flat no. " required name="house"></p>
                    <p><input class="w3-input w3-padding-16" type="text" width="50px" placeholder=" Street/Locality" required name="locality"></p>
                    <p><input class="w3-input w3-padding-16" type="text" width="50px" placeholder=" Pincode " required name="pincode"></p>
                    <br>
                    <h4 class="w3-text-light-grey">3. Academic details:</h4>
                    <p>----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
                    <p><input class="w3-input w3-padding-16 " type="text" width="50px" placeholder=" Degree " required name="degree "></p>
                    <p><input class="w3-input w3-padding-16" type="text" width="50px" placeholder=" Branch " required name="branch"></p>
                    <p><input class="w3-input w3-padding-16" type="text" width="50px" placeholder=" University regestration number " required name="redgno"></p>
                    <p><input class="w3-input w3-padding-16" type="text" width="50px" placeholder=" Section" required name="sec"></p>
                    <p><input class="w3-input w3-padding-16" type="text" width="50px" placeholder=" Passing Year" required name="year"></p>
                    <br>
                    <h4 class="w3-text-light-grey">4. Current Worklife details:</h4>
                    <p>----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
                    <p><input class="w3-input w3-padding-16 " type="text" width="50px" placeholder=" Current Organization " required name="org "></p>
                    <p><input class="w3-input w3-padding-16" type="text" width="50px" placeholder=" Designation " required name="cdeg"></p>
                    <p><input class="w3-input w3-padding-16 " type="text" width="50px" placeholder=" Current State " required name="cstate "></p>
                    <p><input class="w3-input w3-padding-16" type="text" width="50px" placeholder=" Current District " required name="cdistrict"></p>
                    <p><input class="w3-input w3-padding-16" type="text" width="50px" placeholder=" Current House/Door/Flat no. " required name="chouse"></p>
                    <p><input class="w3-input w3-padding-16" type="text" width="50px" placeholder=" Current Street/Locality" required name="clocality"></p>
                    <p><input class="w3-input w3-padding-16" type="text" width="50px" placeholder=" Current Pincode " required name="cpincode"></p>
                    <p><input class="w3-input w3-padding-16" type="text" width="50px" placeholder=" Years of experience" required name="cexperience"></p>
                    <br>
                    <h4 class="w3-text-light-grey">5. Present Organization details:</h4>
                    <p>----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
                    <p><input class="w3-input w3-padding-16" type="text" width="50px" placeholder=" Organisation Type(Example: Product or Service based)" required name="orgtype"></p>
                    <p><input class="w3-input w3-padding-16" type="text" width="50px" placeholder=" Organization Email" required name="orgemail"></p>
                    <p><input class="w3-input w3-padding-16" type="text" width="50px" placeholder=" Organization Contact " required name="orgcontact"></p>
                    <p><input class="w3-input w3-padding-16" type="text" width="50px" placeholder=" Organization Fax " required name="orgfax"></p>
                    <p><input class="w3-input w3-padding-16 " type="text" width="50px" placeholder=" Current State " required name="orgstate "></p>
                    <p><input class="w3-input w3-padding-16" type="text" width="50px" placeholder=" Location " required name="orgloc"></p>
                    <p><input class="w3-input w3-padding-16" type="text" width="50px" placeholder=" Pincode " required name="orgpincode"></p>


                    <p>
                        <button class="w3-button w3-light-grey w3-padding-large type=" submit " required name=" updateeditcode ">                        
                           <b>UPDATE INFO</b>
                        </button>
                    </p>
                </form>
                <!--End Contact Section-->
            </div>


            <!-- Footer -->
            <footer class="w3-content w3-padding-100 w3-text-grey w3-large w3-center ">
                <a href="https://www.facebook.com/SikshaOAnusandhanSOA/ " target="_blank " class="w3-hover-text-green "><i class="w3-center fa fa-facebook-official w3-hover-opacity w3-xlarge "></i></a>
                <a href="https://www.instagram.com/soa_sikshaoanusandhan/?hl=en " target="_blank " class="w3-hover-text-green "><i class="fa fa-instagram w3-hover-opacity w3-xlarge w3-&ensp "></i></a>
                <!-- <i class="fa fa-snapchat w3-hover-opacity "></i>
                <i class="fa fa-pinterest-p w3-hover-opacity "></i>-->
                <a href="https://twitter.com/soasocialmedia?lang=en " target="_blank " class="w3-hover-text-green "><i class="fa fa-twitter w3-hover-opacity w3-xlarge "></i></a>
                <a href="https://in.linkedin.com/school/siksha- 'o'-anusandhan-university/ " target="_blank " class="w3-hover-text-green "><i class="fa fa-linkedin w3-hover-opacity w3-xlarge "></i></a>
                <p class="w3-center ">Copyrights &copy;2020 PseudoDevOps
                </p>
                <p class="w3-medium w3-center ">Geekcode visit us at
                    <a href="https://github.com/Sudeep25022000/Alumini-System-Hackerwar2020- " target="_blank " class="w3-hover-text-green ">PseudoDevOps</a>
                </p>

                <!-- End footer -->
            </footer>


            <!-- END PAGE CONTENT -->
        </div>
        </div>

</body>

</html>
