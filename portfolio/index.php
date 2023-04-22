    <?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST["sub"]))
{
    require_once("PHPMailer/PHPMailer.php");
    require_once("PHPMailer/SMTP.php");
require_once("PHPMailer/Exception.php");

    $nm=$_POST["name"];
    $em=$_POST["mobile"];
    $pn=$_POST["email"];
    $ms=$_POST["message"];


    

    $mail = new PHPMailer(true);


try {
    //Server settings
    $mail->SMTPDebug =false;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'villainvillain973@gmail.com';                     //SMTP username
    $mail->Password   = 'iwiqgydwdkofthqk';                               //SMTP password
    $mail->SMTPSecure = "TLS";            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom($_POST["email"],'mail sending');
    $mail->addAddress('villainvillain973@gmail.com', 'contanct us mail sending');     //Add a recipient
    // $mail->addAddress('ellen@example.com');               //Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'contact with us email sending data';
    $mail->Body    =  "<p> costmer name is</p>" .$nm."<br>". "<p> costmer mobile is</p>" .$em."<br>". "<p> costmer email is</p>" .$pn."<br>". "<p> costmer message is</p>" .$ms."<br>";
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo "<script>
    
    alert('Thanks for contact with us')
    window.location='index.php';
    
    </script>";
}

catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";

}
}
?>















<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Prince portfolio</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/styel.css'>



    <!--css bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">




    <!--icon-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">



    <!--favicon-->
    <link href="img/favicon1.jfif" rel="icon">
    <!--js bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>




    <!--jq-->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>


    <!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
    <link rel="stylesheet" type="text/css" href="engine1/style.css" />
    <script type="text/javascript" src="engine1/jquery.js"></script>
    <!-- End WOWSlider.com HEAD section -->




</head>

<body>




        <!--navbar start-->


        <nav class="navbar nav navbar-expand-lg bg-white navbar-light shadow py-lg-0 px-4 px-lg-5 fixed-top">
            <a href="index.html" class="navbar-brand d-block d-lg-none">
                <h1 class="text-dark fw-bold m-0">PRINCE</h1>
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between py-4 py-lg-0" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="#home" class="nav-item nav-link active">Home</a>
                    <a href="#about" class="nav-item nav-link">About</a>
                    <a href="#skill" class="nav-item nav-link">Skills</a>
                </div>
                <a href="index.php" class="navbar-brand bg-dark py-3 px-4 mx-3 d-none d-lg-block">
                    <h1 class="text-white fw-bold m-0">PRINCE</h1>
                </a>
                <div class="navbar-nav me-auto py-0">
                    <a href="#1" class="nav-item nav-link">Projects</a>
                    <a href="#contact" class="nav-item nav-link">Contact</a>
                </div>
            </div>
        </nav>


        <!--header start-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>






        <div class="container-fluid bg-light my-auto py-6 mt-0 home" id="home">

            <div class="container">
                <div class="row g-5 align-items-center" id="home1">
                    <div class="col-lg-6 py-6 pb-0 pt-lg-0">
                        <h3 class="text-dark mb-3">I'm</h3>
                        <h1 class="display-3 mb-3">PRINCE</h1>
                        <p class="text-light"><span class=" animation-text typing"></span></p>


                        <div class="d-flex align-items-center pt-5">
                            <a href="villain resume.pdf" class="btn btn-primary py-3 px-4 me-5" down>Download Resume</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img class="img-fluid imge" src="img/profile4.png" style="width: 100%; height: auto;">
                    </div>
                </div>
            </div>
        </div>





        <!--About start-->

        <div id="about" class="my-auto py-6 about">

            <section class="wrapper">
                <div class="top">About</div>
                <div class="bottom" aria-hidden="true">About</div>
            </section>

            <div class="container-fluid p-4 display-center">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title text-black font-weight-bold">

                            <p align="justify" style="text-indent: 50px; font-family: 'Noto Sans Avestan', sans-serif;">
                                I am Prince specialization in
                                Front end web Development. I have a skill in HTML, CSS and JavaScript, and I can
                                create
                                responsive designs that look great on all devices. I have a skill to use various
                                front-end
                                libraries and frameworks such as jQuery, Bootstrap and React js to create dynamic
                                user
                                interfaces and responsive designs.</p>

                            <br> <br>

                            <p align="justify" style="text-indent: 50px; font-family: 'Noto Sans Avestan', sans-serif;">
                                In addition, I have excellent
                                problem-solving skills and can troubleshoot technical
                                issues quickly. I have a passion for learning new technologies and staying
                                up-to-date
                                with the latest trends in web development.</p>

                            <br> <br>
                            <p align="justify" style="text-indent: 50px; font-family: 'Noto Sans Avestan', sans-serif;">
                                Overall, I am a highly skilled front-end
                                developer with a passion for creating visually
                                stunning and functional websites that engage and delight users.</p>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <!--Skill start-->
        <div class="container-fluid my-auto py-6 pb-5 display-center" id="skill">
            <!-- <div class="container-fluid"> -->
            <div class="row g-5">
                <section class="wrapper">
                    <div class="top">MY Skills</div>
                    <div class="bottom" aria-hidden="true">MY Skills</div>
                </section>

                <div class="col-lg-6">


                    <h3 class="mb-4 text-white">MY Skills</h3>
                    <div class="row align-items-center">
                        <div class="col-md-6 text-black">
                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="font-weight-bold">HTML</h6>
                                    <h6 class="font-weight-bold">75%</h6>
                                </div>

                                <div class="progress">
                                    <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="75"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                                </div>

                            </div>

                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="font-weight-bold">CSS</h6>
                                    <h6 class="font-weight-bold">80%</h6>
                                </div>

                                <div class="progress">
                                    <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="80"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 80%"></div>
                                </div>
                            </div>

                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="font-weight-bold">JavaScript</h6>
                                    <h6 class="font-weight-bold">70%</h6>
                                </div>

                                <div class="progress">
                                    <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="70"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 70%"></div>
                                </div>
                            </div>


                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="font-weight-bold">bootstrap</h6>
                                    <h6 class="font-weight-bold">86%</h6>
                                </div>

                                <div class="progress">
                                    <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="65"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 86%;"></div>
                                </div>
                            </div>

                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="font-weight-bold">React js</h6>
                                    <h6 class="font-weight-bold">81%</h6>
                                </div>

                                <div class="progress">
                                    <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="65"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 81%"></div>
                                </div>
                            </div>


                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="font-weight-bold">jquery</h6>
                                    <h6 class="font-weight-bold">71%</h6>
                                </div>

                                <div class="progress">
                                    <div class="progress-bar  bg-primary" role="progressbar" aria-valuenow="65"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 71%">
                                    </div>
                                </div>

                            </div>


                        </div>

                    </div>



                </div>

                <div class="col-lg-6">
                    <div class="col-lg-5 img2">
                        <img src="img/skill4.gif">
                    </div>
                </div>

            </div>



        </div>



        </div>


        <!--projects start-->

        <div id="1" class="my-auto py-6 ">
            <section class="wrapper">
                <div class="top">MY Project</div>
                <div class="bottom" aria-hidden="true">MY Project</div>
            </section>


            <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/pj/p1.PNG" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/pj/p2.PNG" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/pj/p3.PNG" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/pj/p4.PNG" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/pj/p5.PNG" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

        </div>




        <!--contact start-->




        <div id="contact" class="my-auto py-6">
            <section class="wrapper">
                <div class="top">Contact</div>
                <div class="bottom" aria-hidden="true">Contact</div>
            </section>

            <div class="container-fluid my-2 py-2 bg-white">
                <div class="u-fade-type-down js-scroll-trigger">
                    <h2 class="heading-colour"><b>Contact</b></h2>
                    <div class="row justify-content-between">
                        <p align="justify" style="font-family: 'Noto Sans Avestan', sans-serif;">Contact details are
                            mention below to get in touch with me:</p>
                        <div class="col-md-6 p-3 bg-white order-1 shadow  mt-3"
                            style="font-family: 'Noto Sans Avestan', sans-serif;">
                            <div class="row">
                                <div class="contact-icon col-2 text-center pt-2 fs-3">
                                    <i class="bi bi-geo-alt rounded-circle p-1 ps-2 pe-2"></i>
                                </div>
                                <div class="col-10">
                                    <h4>Location:</h4>
                                    <div class="d-inline">
                                        <p align="justify">Tops</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="contact-icon col-2 text-center pt-2 fs-3">
                                    <i class="bi bi-envelope rounded-circle p-1 ps-2 pe-2"></i>
                                </div>
                                <div class="col-10">
                                    <h4>Email:</h4>
                                    <p>villainvillain973@gmail.com</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="contact-icon col-2 text-center pt-2 fs-3">
                                    <i class="bi bi-phone rounded-circle p-1 ps-2 pe-2"></i>
                                </div>
                                <div class="col-10">
                                    <h4>Call:</h4>
                                    <p>+91 7096223098</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="contact-icon col-2 text-center pt-2 fs-3">
                                    <i class="bi bi-instagram rounded-circle p-1 ps-2 pe-2"></i>
                                </div>
                                <div class="col-10">
                                    <h4>Instgarm:</h4>
                                    <p> <a href="http://instagram.com/_u/p.v_3718/" 
                                            style="text-decoration: none;">p.v_3718</a></p>
                                </div>
                            </div>
                            <div class="row">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3691.676943123941!2d70.77267631478664!3d22.290224185328846!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959ca248c77c099%3A0xdf5ac10af64ac8ee!2sTOPS%20Technologies!5e0!3m2!1sen!2sin!4v1681036110510!5m2!1sen!2sin"
                                    width="600" height="350" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>

                            </div>
                        </div>
                        <div class="col-md-6 p-3 bg-white order-0 shadow mt-3">
                            <form id="frm" method="post">
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text"><i class="bi bi-person"></i></span>
                                    <input type="text" name="name" class="form-control" placeholder="Your Name"
                                        required>
                                </div>
                                <div class="input-group flex-nowrap mt-4">
                                    <span class="input-group-text"><i class="bi bi-phone"></i></span>
                                    <input type="text" name="mobile" class="form-control"
                                        placeholder="Your Mobile Number" required>
                                </div>
                                <div class="input-group flex-nowrap mt-4">
                                    <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                    <input type="text" name="email" class="form-control"
                                        placeholder="Your Email Address" required>
                                </div>
                                <div class="form-floating mt-4">
                                    <textarea name="message" class="form-control" placeholder="Leave a comment here"
                                        id="floatingTextarea2" style="height: 300px" required></textarea>
                                    <label for="floatingTextarea2" >Type a Message Here</label>
                                </div>
                                <div class="d-grid gap-2 col-7 mx-auto mt-4">
                                    <button name="sub" class="btn btn-primary" type="submit" value="Send">Send
                                        Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

   <!--footer start-->
        <footer class="footer text-white">

            <p>&copy;2023 Copyright | All Rights Reserved. <br> <br> Designed & Developed by Prince</p>
        </footer>

    


    <script src='js/main.js'></script>
</body>

</html>