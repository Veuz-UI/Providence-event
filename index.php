<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="images/favicon.svg" rel="icon" />
    <title>Rasam</title>
    <link rel="stylesheet" href="css/icons.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" type="text/css" href="css/owl-carousal.css">
    <link rel="stylesheet" type="text/css" href="css/owl-theme.css">
    <link href="css/aos.css" rel="stylesheet">
</head>

<body>
    <style>
        .banner-box-div {
    position: relative;
    width: 100%;
    height: 100vh;
    display: flex;
    justify-content: center;
    background-color: #000;
}
.banner-box-div video {
    width: 100%;
    height: 100%;
    object-fit: cover;
}
.banner-box-div .container{
    position: absolute;
    top: 20px;
}
.banner-box-div .navbar{
    border: 1px solid rgb(255 255 255 / 10%);
    background: rgba(255, 255, 255, 0.05);
    backdrop-filter: blur(14px);
}
.banner-box-div .nav-link{
    color: #ffffff;
}
.background-all {
    background-position: bottom;
}
.event-img{
    margin-bottom: 100px;
}
.blue-bg{
    box-shadow: 0px 0px 12px rgb(0 0 0 / 10%);
    border-radius: 15px;
}
.book-button:hover{
    color: #222;
    background-color: #fff;
}
.blue-bg {
    padding: 80px 130px;
    position: relative;
    text-align: center;
}

    </style>




<div class="loader-box">
    <img src="images/rasam.gif">
</div>
    <div class="banner-box-div">
        <video muted="" autoplay="" poster="img/videoframe.jpg" class="fullscreen-bg__video rasam1">
            <source src="images/rasam1.mp4" type="video/mp4">
        </video>
        <img src="images/rasam2.jpg" alt="" class="fullscreen-bg__video rasam2"  id="videoImage">
        <!-- <video muted="" autoplay="" poster="img/videoframe.jpg" class="fullscreen-bg__video rasam2">
            <source src="images/rasam2.mp4" type="video/mp4">
        </video> -->
        <div class="container">
            <nav class="navbar navbar-expand-lg  main-nav">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                      <a class="navbar-brand order-first order-md-0 mx-0 margin-header" href="index.php"><img src="images/logow.svg" img-fluid></a>
              
                      <div class="collapse navbar-collapse w-100" id="navbarSupportedContent">
                          <ul class="nav navbar-nav w-100 resp-width">
                              <li class="nav-item active">
                                  <a class="nav-link" href="index.php">Home</a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" href="agenda.php">Agenda</a>
                              </li>
                              <!-- <li class="nav-item">
                                  <a class="nav-link" href="register.php">Tickets</a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" href="venue.php">Venue</a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" href="sponsors.php">Sponsors</a>
                              </li> -->
                          </ul>
                      </div>
              
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                          <ul class="nav navbar-nav ms-auto nav-regst-btn">
                              <a href="register.php">
                              <button type="button" class="book-button">Register Now</button>
                              </a>
                          </ul>
                      </div>
            </nav>
        </div>
        <a href="register.php" class="reg-btn-mob">
        <button type="button" class="book-button">Register Now</button>
        </a>
    </div>

    <section class="event-img">
        <div class="why-attend">
            <div class="container">
                <div class="row gx-0">
                    <div class="col-lg-12">
                        <div class="blue-bg h-100">
                            <div class="content" data-aos="fade-up" data-aos-duration="1000">
                                <h5>Rasam 2k24</h5>
                                <h2>Why attend<span>?</span></h2>
                                <p>Attending Rasam at Providence College of Engineering Chengannur, offers a blend of technology and culture, providing a unique platform to showcase talents, learn from experts, and network with peers. It's a chance to immerse yourself in a vibrant atmosphere, explore innovative ideas, and enjoy a diverse range of activities. Plus, it's a great opportunity to connect with like-minded individuals and gain valuable insights for personal and professional growth.</p>

                                    <div class="sponsor-maindiv">
                                        <h3>Our Sponsors</h3>
                                        <div class="sponsor-div-boxes">
                                            
                                            <div class="sponsor-div d-flex justify-content-center align-items-center flex-column">
                                                <div class="sponsor-logo-box">
                                                    <img src="images/jubeerich.svg">
                                                </div> 
                                              
                                            </div>
                                            <div class="sponsor-div d-flex justify-content-center align-items-center flex-column">
                                                <div class="sponsor-logo-box">
                                                    <img src="images/eventxpro.svg">
                                                </div> 
                                              
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <img src="images/d1.png" alt="" class="d1">
                            <img src="images/d2.png" alt="" class="d2">
                            <img src="images/d3.png" alt="" class="d3">
                           
                        </div>
                    </div>
                  
                </div>
            </div>
        </div>
    </section>

    <div class="background-all">
  
        <div class="container">
          

            <section class="counter">
                <div class="count-bg ">

                    <div class="container">
                        <div class="days1">
                            <h3>Days To Go</h3>
                            <h5>Stay tuned for interesting picks from our schedule.</h5>

                        </div>

                        <div class="time-content d-flex justify-content-center">
                            <div class="time days" data-aos="fade-up">
                                <span class="number"></span>
                                <span class="text">days</span>
                            </div>
                            <div class="time hours" data-aos="fade-up" data-aos-duration="500">
                                <span class="number"></span>
                                <span class="text">hours</span>
                            </div>
                            <div class="time minutes" data-aos="fade-up" data-aos-duration="1000">
                                <span class="number"></span>
                                <span class="text">minutes</span>
                            </div>
                            <div class="time seconds" data-aos="fade-up" data-aos-duration="1500">
                                <span class="number"></span>
                                <span class="text">seconds</span>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="contact-section">
        <div class="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6" data-aos="fade-right">
                        <div class="venue">
                            <h2>Venue</h2>
                            <h6>Our location and how you can get here</h6>
                            <div class="when">
                                <div class="row d-flex align-items-center">
                                    <div class="col-lg-4">
                                        <div class="clndr-v d-flex justify-content-center align-items-center">
                                            <img src="images/menstruation.gif" alt="">
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="whn-cntnt">
                                            <h3 class="when-h3">When</h3>
                                            <div class="when-cntnd d-flex">
                                                <div class="d-flex align-items-center i-clndr">
                                                    <i class="fa-regular fa-calendar"></i>
                                                    <h3>Sep 28, 2023 - Sep 30, 2023</h3>
                                                </div>
                                                <div class="d-flex align-items-center ms-md-3 ms-0 i-clock">
                                                    <i class="fa-regular fa-clock"></i>
                                                    <h3>08:00 AM</h3>
                                                </div>

                                            </div>
                                            <button class="add-clndr">Add to Calendar</button>
                                        </div>

                                    </div>
                                </div>


                            </div>
                            <div class="where">
                                <div class="row d-flex align-items-center">
                                    <div class="col-lg-4">
                                        <div class="map-v d-flex justify-content-center align-items-center">
                                            <img src="images/pin.gif" alt="">
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="whr-cntnt">
                                            <h3 class="when-h3">Where</h3>
                                            <h4 class="location">Providence College of Engineering</h4>
                                            <h5 class="address">Angadical South, Chengannur, Alappuzha District, Kerala 689122</h5>
                                        </div>


                                    </div>
                                </div>

                            </div>
                            <div class="map-main">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d984.3385236052864!2d76.61116892301563!3d9.30185903288671!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b0622984cfaf3af%3A0xd0320f890b6fca5!2sProvidence%20College%20of%20Engineering%20%26%20School%20of%20Business%2C%20Chengannur!5e0!3m2!1sen!2sin!4v1710486047256!5m2!1sen!2sin" width="100%" height="260" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                             
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-left">
                        <div class="get-in">
                            <form id="contact" action="" method="post">
                                <h3>Get in touch</h3>
                                <h4>Got questions? Write to us.</h4>
                                <fieldset>
                                    <label for="">First name *</label>
                                    <input placeholder="Enter your first name" type="text">
                                </fieldset>
                                <fieldset>
                                    <label for="">Last name</label>
                                    <input placeholder="Enter your last name" type="text">
                                </fieldset>
                                <fieldset>
                                    <label for="">Email Address</label>
                                    <input placeholder="Enter your email address" type="email">
                                </fieldset>
                                <fieldset>
                                    <label for="">Mobile</label>
                                    <input placeholder="Enter your mobile number" type="tel" required>
                                </fieldset>
                                <fieldset>
                                    <label for="">Address</label>
                                    <textarea placeholder="Enter your Address" tabindex="5" required></textarea>
                                </fieldset>
                                <fieldset>
                                    <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

        </div>


    </div>






    <?php include("footer.php")?>

    <script src="js/jquery.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstap.min.js"></script>
    <script src="js/owl.carousal.js"></script>
    <script src="js/counter.js "></script>
    <script src="js/fontawesome.js"></script>
    <script src="js/aos.js"></script>

    <script>
        AOS.init({
            disable: 'mobile'
        });
    </script>
    <script>
        // $(document).ready(function(){
        //     $(window).on('load', function(){
        //         $('.loader-box').fadeOut('slow');
        //     });
        // });
        $(function () {
                setTimeout(function () {
                    // $('.loader-mask').delay(350).fadeOut('slow')
                    $(".loader-box").hide();
                }, 2000)

            })
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var videoImage = document.getElementById("videoImage");
            var rasam2Image = new Image();
            rasam2Image.onload = function() {
                videoImage.src = "images/rasam2.gif";
            };
            rasam2Image.src = "images/rasam2.gif";
        });
    </script>
</body>

</html>