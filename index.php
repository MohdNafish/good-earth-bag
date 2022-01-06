<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coming Soon... | Good Earth</title>
    <link rel="shortcut icon" href="./assets/medias/good-earth-bag.png" type="image/png">
    <link rel="stylesheet" href="./assets/css/aos.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/style-2.min.css">
</head>
<body>
    <section class="banner">
        <img src="./assets/medias/good-earth-bag.png" class="logo d-block" data-aos="zoom-in" data-aos-duration="2000" draggable="false">
        <div class="content-wrap">
            <p class="content-para">
                Join us in our goal to create awareness, compassion for nature, and a better place for all future generations to come. Good Earth Bag Ltd is a supplier of food safe, compostable - 100% biodegradable bags and other every day products.  Established in August 2020, Good Earth Bag Ltd based out of Vancouver, BC Canada will continue to develop a wide range of environmently friendly alternatives to traditional plastics.
            </p>
            <p class="content-para">
                All good earth products are made from the resin derived from plant starches, vegetable oils & 100% compostable polymers which can be consumed by micro-organisms that live in the earth’s soil. While traditional plastics can take up to a 1,000 years to decompose, a single food safe good earth bag will biodegrade within 72 – 90 days.
            </p>
            <p class="content-para">
                In addition to providing a plastic alternative, we are on a mission to help our earth by planting a tree with every purchase through www.treesforthefuture.org
            </p>
            <p class="content-para">
                <strong>
                Thank you for considering the planet and taking one step closer to a plastic free future. <br/>
                For more information please call us toll-free <a href="tel:+1-800-617-0211">1-800-617-0211</a>,  email us <a href="mailto:info@goodearthbag.com">info@goodearthbag.com</a> or get in touch with us here:
                </strong>
            </p>
            <button type="button" class="btn btn-green" data-bs-toggle="modal" data-bs-target="#myModal">Contact Us</button>
            <div class="modal fade" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Contact Us</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <form id="contact-form" action="<?=$_SERVER['PHP_SELF'];?>" method="post">
                                <div class="form-group">
                                    <label>Full Name <span class="text-danger">*</span></label>
                                    <input type="text" name="fname" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Email <span class="text-danger">*</span></label>
                                    <input type="text" name="email" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Subject <span class="text-danger">*</span></label>
                                    <input type="text" name="subject" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Message <span class="text-danger">*</span></label>
                                    <textarea name="message" rows="4" class="form-control" placeholder="Message.." required></textarea>
                                </div>
                                <input type="submit" name="submit" value="Submit" class="btn btn-green mt-3">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <img src="./assets/medias/go-green-bg.jpg" class="w-100">
    <section class="benifits-section">
        <div class="heading-wrap"><h2 class="benifits-title text-white text-center">good earth bag benefits</h2></div>
        <div class="container-fluid container-full-mw">
            <div class="row py-5 text-white font-size-20 justify-content-center">
                <div class="col-lg-4 col-sm-6 order-lg-0">
                    <ol class="h-100 d-flex flex-column justify-content-around text-justify">
                        <li>Zero Waste</li>
                        <li>Renewable Resource</li>
                        <li>It’s good for the earth</li>
                        <li>It’s good for our health</li>
                        <li>55% less water consumption than plastic</li>
                        <li>99.6% less water consumption than paper products</li>
                        <li>46% less energy consumption than plastic</li>
                        <li>95% less energy than paper products</li>
                    </ol>
                </div>
                <div class="col-lg-4 col-sm-6 order-lg-2 mb-3">
                    <ol start="9" class="h-100 d-flex flex-column justify-content-around text-justify">
                        <li>33% less carbon monoxide than plastic</li>
                        <li>62% less carbon monoxide than paper products</li>
                        <li>30% less chemical oxygen demand than plastic</li>
                        <li>71% less chemical oxygen demand than paper</li>
                        <li>No sulphur oxide</li>
                        <li>No nitric oxide</li>
                        <li>being mistaken for food by animals </li>
                    </ol>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8 order-lg-1"><img src="./assets/medias/benifits-good-earth-bag.svg" class="p-3 img-fluid"></div>
            </div>
        </div>
    </section>
    <section class="vegi-wrap"></section>
    <section class="products-section pb-5">
        <div class="heading-wrap mb-4"><h2 class="benifits-title text-white text-center mb-0"><img src="./assets/medias/pre-title-icon.svg" class="me-3 pre-title-art">100% compostable products</h2></div>
        <div class="container-fluid container-full-mw">
            <div class="product_slider py-5 px-5">
                <article class="product-item">
                    <a href="#" class="product-item-image">
                        <img src="./assets/medias/products/GEB0001.png" title="Biodegradable Ziploc Bags" alt="Biodegradable Ziploc Bags">
                    </a>
                    <div class="product-info">
                        <span class="product-sub-title">GEB0001</span>
                        <p class="product-info-name">Biodegradable Ziploc Bags</p>
                        <div class="divider"></div>
                        <div class="product-info-details">
                            <p><span>Material:</span> PLA&PBAT</p>
                            <p><span>Thickness:</span> 50 Micron</p>
                            <p><span>Size:</span> Custom</p>
                            <p><span>Print:</span> 2 Color (100% Vegetable Based Ink)</p>
                        </div>
                    </div>
                </article>
                <article class="product-item">
                    <a href="#" class="product-item-image">
                        <img src="./assets/medias/products/GEB0002.png" title="Biodegradable Zipper Bags" alt="Biodegradable Zipper Bags">
                    </a>
                    <div class="product-info">
                        <span class="product-sub-title">GEB0002</span>
                        <p class="product-info-name">Biodegradable Zipper Bags</p>
                        <div class="divider"></div>
                        <div class="product-info-details">
                            <p><span>Material:</span> PLA&PBAT</p>
                            <p><span>Thickness:</span> 80 Micron</p>
                            <p><span>Size:</span> Custom</p>
                            <p><span>Print:</span> 2 Color (100% Vegetable Based Ink)</p>
                        </div>
                    </div>
                </article>
                <article class="product-item">
                    <a href="#" class="product-item-image">
                        <img src="./assets/medias/products/GEB0003.png" title="Flat & Stand-up Brown Kraft" alt="Flat & Stand-up Brown Kraft">
                    </a>
                    <div class="product-info">
                        <span class="product-sub-title">GEB0003</span>
                        <p class="product-info-name">Flat & Stand-up Brown Kraft</p>
                        <div class="divider"></div>
                        <div class="product-info-details">
                            <p>Food Grade Biodegradable Bag</p>
                            <p><span>Material:</span> PLA&PBAT & Recycled Paper</p>
                            <p><span>Thickness:</span> 95gsm</p>
                            <p><span>Size:</span> Custom</p>
                            <p><span>Print:</span> 2 Color (100% Vegetable Based Ink)</p>
                        </div>
                    </div>
                </article>
                <article class="product-item">
                    <a href="#" class="product-item-image">
                        <img src="./assets/medias/products/GEB0004.png" title="Pet Waste Biodegradable Bags" alt="Pet Waste Biodegradable Bags">
                    </a>
                    <div class="product-info">
                        <span class="product-sub-title">GEB0004</span>
                        <p class="product-info-name">Pet Waste Biodegradable Bags</p>
                        <div class="divider"></div>
                        <div class="product-info-details">
                            <p><span>Material:</span> PLA&PBAT&Starch</p>
                            <p><span>Thickness:</span> 15um</p>
                            <p><span>Size:</span> 23 x 33cm</p>
                            <p><span>Print:</span> 2 Color (100% Vegetable Based Ink)</p>
                        </div>
                    </div>
                </article>
                <article class="product-item">
                    <a href="#" class="product-item-image">
                        <img src="./assets/medias/products/GEB0005.png" title="Biodegradable Shopping Bags" alt="Biodegradable Shopping Bags">
                    </a>
                    <div class="product-info">
                        <span class="product-sub-title">GEB0005</span>
                        <p class="product-info-name">Biodegradable Shopping Bags</p>
                        <div class="divider"></div>
                        <div class="product-info-details">
                            <p><span>Material:</span> PLA&PBAT&Starch</p>
                            <p><span>Thickness:</span> 22um</p>
                            <p><span>Size:</span> (28+6x2)x48cm</p>
                            <p><span>Print:</span> 2 Color (100% Vegetable Based Ink)</p>
                        </div>
                    </div>
                </article>
                <article class="product-item">
                    <a href="#" class="product-item-image">
                        <img src="./assets/medias/products/GEB0006.png" title="Biodegradable Drawstring Bags" alt="Biodegradable Drawstring Bags">
                    </a>
                    <div class="product-info">
                        <span class="product-sub-title">GEB0006</span>
                        <p class="product-info-name">Biodegradable Drawstring Bags</p>
                        <div class="divider"></div>
                        <div class="product-info-details">
                            <p><span>Material:</span> PLA&PBAT&Starch</p>
                            <p><span>Thickness:</span> 20um</p>
                            <p><span>Size:</span> 40 x 45cm</p>
                            <p><span>Print:</span> 2 Color (100% Vegetable Based Ink)</p>
                        </div>
                    </div>
                </article>
                <article class="product-item">
                    <a href="#" class="product-item-image">
                        <img src="./assets/medias/products/GEB0007.png" title="Biodegradable Self-Seal Mailing Bags" alt="Biodegradable Self-Seal Mailing Bags">
                    </a>
                    <div class="product-info">
                        <span class="product-sub-title">GEB0007</span>
                        <p class="product-info-name">Biodegradable Self-Seal Mailing Bags</p>
                        <div class="divider"></div>
                        <div class="product-info-details">
                            <p><span>Material:</span> PLA&PBAT&Starch</p>
                            <p><span>Thickness:</span> 80um</p>
                            <p><span>Size:</span> 33 x 40cm</p>
                            <p><span>Print:</span> CMYK (100% Vegetable Based Ink)</p>
                        </div>
                    </div>
                </article>
                <article class="product-item">
                    <a href="#" class="product-item-image">
                        <img src="./assets/medias/products/GEB0008.png" title="Flat Compost Bags" alt="Flat Compost Bags">
                    </a>
                    <div class="product-info">
                        <span class="product-sub-title">GEB0008</span>
                        <p class="product-info-name">Flat Compost Bags</p>
                        <div class="divider"></div>
                        <div class="product-info-details">
                            <p><span>Material:</span> PLA&PBAT&Starch</p>
                            <p><span>Thickness:</span> 15um</p>
                            <p><span>Size:</span> 44 x 52cm</p>
                            <p><span>Print:</span> 2 Color (100% Vegetable Based Ink)</p>
                        </div>
                    </div>
                </article>
                <article class="product-item">
                    <a href="#" class="product-item-image">
                        <img src="./assets/medias/products/GEB0009.png" title="Industrial Size Compost Bin Bags" alt="Industrial Size Compost Bin Bags">
                    </a>
                    <div class="product-info">
                        <span class="product-sub-title">GEB0009</span>
                        <p class="product-info-name">Industrial Size Compost Bin Bags</p>
                        <div class="divider"></div>
                        <div class="product-info-details">
                            <p><span>Material:</span> PLA&PBAT&Starch</p>
                            <p><span>Thickness:</span> 25, 30 & 35 Microns</p>
                            <p><span>Size:</span> 240L (100 x 120cm) / 360L / 480L</p>
                            <p><span>Print:</span> 2 Color (100% Vegetable Based Ink)</p>
                        </div>
                    </div>
                </article>
                <article class="product-item">
                    <a href="#" class="product-item-image">
                        <img src="./assets/medias/products/GEB0010.png" title="Compostable Drinking Straws" alt="Compostable Drinking Straws">
                    </a>
                    <div class="product-info">
                        <span class="product-sub-title">GEB0010</span>
                        <p class="product-info-name">Compostable Drinking Straws</p>
                        <div class="divider"></div>
                        <div class="product-info-details">
                            <p><span>Material:</span> PLA</p>
                            <p><span>Thickness:</span> 80um</p>
                            <p><span>Size:</span> 200mm x 6mm</p>
                            <p><span>Print:</span> 2 Color (100% Vegetable Based Ink)</p>
                        </div>
                    </div>
                </article>
                <article class="product-item">
                    <a href="#" class="product-item-image">
                        <img src="./assets/medias/products/GEB0011.png" title="Compostable Cutlery" alt="Compostable Cutlery">
                    </a>
                    <div class="product-info">
                        <span class="product-sub-title">GEB0011</span>
                        <p class="product-info-name">Compostable Cutlery</p>
                        <div class="divider"></div>
                        <div class="product-info-details">
                            <p><span>Material:</span> PLA</p>
                            <p><span>Weight:</span> 4.6g-5.5g</p>
                            <p><span>Size:</span> 148mm-159mm</p>
                        </div>
                    </div>
                </article>
                <article class="product-item">
                    <a href="#" class="product-item-image">
                        <img src="./assets/medias/products/GEB0012.png" title="9oz Compostable Drinking Cups" alt="9oz Compostable Drinking Cups">
                    </a>
                    <div class="product-info">
                        <span class="product-sub-title">GEB0012</span>
                        <p class="product-info-name">9oz Compostable Drinking Cups</p>
                        <div class="divider"></div>
                        <div class="product-info-details">
                            <p><span>Material:</span> PLA</p>
                            <p><span>Weight:</span> 7.1g</p>
                            <p><span>Size:</span> 96*55*75mm</p>
                            <p><span>Print:</span> 2 Color (100% Vegetable Based Ink)</p>
                        </div>
                    </div>
                </article>
                <article class="product-item">
                    <a href="#" class="product-item-image">
                        <img src="./assets/medias/products/GEB0013.png" title="Cling Film on Roll" alt="Cling Film on Roll">
                    </a>
                    <div class="product-info">
                        <span class="product-sub-title">GEB0013</span>
                        <p class="product-info-name">Cling Film on Roll</p>
                        <div class="divider"></div>
                        <div class="product-info-details">
                            <p><span>Material:</span> PLA</p>
                            <p><span>Thickness:</span> 10um</p>
                            <p><span>Weight:</span> 562.5g</p>
                            <p><span>Size:</span> 450mm x 100m</p>
                        </div>
                    </div>
                </article>
                <article class="product-item">
                    <a href="#" class="product-item-image">
                        <img src="./assets/medias/products/GEB0014.png" title="Flowrap Films for Fruit" alt="Flowrap Films for Fruit">
                    </a>
                    <div class="product-info">
                        <span class="product-sub-title">GEB0014</span>
                        <p class="product-info-name">Flowrap Films for Fruit</p>
                        <div class="divider"></div>
                        <div class="product-info-details">
                            <p><span>Material:</span> PLA</p>
                            <p><span>Thickness:</span> 40um</p>
                            <p><span>Size:</span> 300mm x 2000m</p>
                            <p><span>Weight:</span> 30.3kg</p>
                            <p><span>Print:</span> CMYK (100% Vegetable Based Ink)</p>
                        </div>
                    </div>
                </article>
                <article class="product-item">
                    <a href="#" class="product-item-image">
                        <img src="./assets/medias/products/GEB0015.png" title="Compostable Bubble Shipping Bags" alt="Compostable Bubble Shipping Bags">
                    </a>
                    <div class="product-info">
                        <span class="product-sub-title">GEB0015</span>
                        <p class="product-info-name">Compostable Bubble Shipping Bags</p>
                        <div class="divider"></div>
                        <div class="product-info-details">
                            <p><span>Material:</span> PLA&PBAT</p>
                            <p><span>Thickness:</span> 60um</p>
                            <p><span>Size:</span> 250mm x 350mm x 50mm</p>
                            <p><span>Print:</span> CMYK (100% Vegetable Based Ink)</p>
                        </div>
                    </div>
                </article>
                <article class="product-item">
                    <a href="#" class="product-item-image">
                        <img src="./assets/medias/products/GEB0016.png" title="Compostable Machine Stretch Film" alt="Compostable Machine Stretch Film">
                    </a>
                    <div class="product-info">
                        <span class="product-sub-title">GEB0016</span>
                        <p class="product-info-name">Compostable Machine Stretch Film</p>
                        <div class="divider"></div>
                        <div class="product-info-details">
                            <p><span>Material:</span> PLA&PBAT</p>
                            <p><span>Thickness:</span> 20um</p>
                            <p><span>Weight:</span> 4.6kg</p>
                            <p><span>Size:</span> 400mm x 460m</p>
                        </div>
                    </div>
                </article>
                <article class="product-item">
                    <a href="#" class="product-item-image">
                        <img src="./assets/medias/products/GEB0017.png" title="Heat Shrink Films" alt="Heat Shrink Films">
                    </a>
                    <div class="product-info">
                        <span class="product-sub-title">GEB0017</span>
                        <p class="product-info-name">Heat Shrink Films</p>
                        <div class="divider"></div>
                        <div class="product-info-details">
                            <p><span>Material:</span> PLA</p>
                            <p><span>Thickness:</span> 20um</p>
                            <p><span>Weight:</span> 1.5kg</p>
                            <p><span>Size:</span> 250mm x 350mm x 50mm</p>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>
    <section class="newsletter-section py-5 text-white">
        <div class="container">
            <div class="row">
                <div class="col-md-6 m-auto">
                    <h2 class="">Subscribe to our newsletter!</h2>
                    <p class="content-para">Thank you for considering the planet and taking one step closer to a plastic free future.</p>
                    <form id="newsletter-form">
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Enter Your Name" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="newsletter_mail" placeholder="Enter Your Email" required>
                        </div>
                        <button class="subscribe-btn w-100 border-0">SUBSCRIBE</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="heading-wrap copyright-wrap text-white d-flex justify-content-between flex-wrap">
        <p class="m-0">
            &#169; 2021 Good Earth Bag Corporation, All rights reserved. 
        </p>
        <p class="m-0">
            Designed with <img src="./assets/medias/heart.svg" width="16px"> by <a href="https://chapter247.com" class="text-decoration-none text-white d-inline-flex">Chapter 247 Infotech</a>.
        </p>
    </section>
    <script src="./assets/js/jquery.min.js"></script>
    <script src="./assets/js/aos.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <script>
        AOS.init();
    </script>

    <script src="./assets/js/slick.min.js"></script>
    <script>
        jQuery(function(){
          jQuery(".product_slider").slick({
            speed: 1000,
            slidesToShow: 4,
            slidesToScroll: 1,
            responsive: [
            {
              breakpoint: 1400,
              settings: {
                slidesToShow: 3,
                adaptiveHeight: true,
              },
            },
            {
              breakpoint: 991,
              settings: {
                slidesToShow: 2,
                adaptiveHeight: true,
              },
            },
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
              },
            },
          ],
            prevArrow: '<button class="slide-arrow prev-arrow"></button>',
            nextArrow: '<button class="slide-arrow next-arrow"></button>'
          });
        });
    </script>

    <script src="./assets/js/jquery.validate.min.js"></script>
    <script>
        $(document).ready(function() {
          $("#contact-form").validate();
        });
    </script>
    <script>
        $(document).ready(function() {
          $("#newsletter-form").validate();
        });
    </script>

    <?php
        require_once "vendor/autoload.php";
        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\SMTP;
        use PHPMailer\PHPMailer\Exception;


        if(isset($_POST["submit"])){
            // Checking For Blank Fields..
            if($_POST["fname"]==""|| $_POST["email"]==""||$_POST["subject"]==""||$_POST["message"]==""){
            echo "Fill All Fields..";
            }
            else{

            $mail = new PHPMailer(true);

            //Enable SMTP debugging.
            // $mail->SMTPDebug = 3;
            //Set PHPMailer to use SMTP.
            $mail->isSMTP();
            //Set SMTP host name
            $mail->Host = "smtp.gmail.com";
            //Set this to true if SMTP host requires authentication to send email
            $mail->SMTPAuth = true;
            //Provide username and password
            $mail->Username = "nafish021996";
            $mail->Password = "epqfxpyyxjgwucvu";
            //If SMTP requires TLS encryption then set it
            $mail->SMTPSecure = "tls";
            //Set TCP port to connect to
            $mail->Port = 587;

            $mail->From = $_POST['email'];
            $mail->FromName = $_POST['fname'];

            $mail->addAddress("nafish@chapter247.com", "Good earth bag");
            $mail->addReplyTo($_POST['email']);

            $mail->isHTML(true);

            $mail->Subject = $_POST["subject"];
            $mail->Body = "<strong>Name:</strong> ". $_POST['fname']. "<br/>". "<strong>Email: </strong>" .$_POST['email']. "<br/>
            
            <strong>Message:</strong>
            <i>".$_POST['message']."</i>";
            $mail->AltBody = $_POST['message'];

            try {
            $mail->send();
                echo '<script>alert("This contact form has been sent successfully.");</script>';
            } 
            catch (Exception $e) {
                    echo "Mailer Error: " . $mail->ErrorInfo;
            }
            // echo "Message has been sent"; 

                $mail2 = new PHPMailer(true);

                //Enable SMTP debugging.
                // $mail2->SMTPDebug = 3;
                //Set PHPMailer to use SMTP.
                $mail2->isSMTP();
                //Set SMTP host name
                $mail2->Host = "smtp.gmail.com";
                //Set this to true if SMTP host requires authentication to send email
                $mail2->SMTPAuth = true;
                //Provide username and password
                $mail2->Username = "nafish021996";
                $mail2->Password = "epqfxpyyxjgwucvu";
                //If SMTP requires TLS encryption then set it
                $mail2->SMTPSecure = "tls";
                //Set TCP port to connect to
                $mail2->Port = 587;

                $mail2->From = "nafish@chapter247.com";
                $mail2->FromName = "good earth bag";

                $mail2->addAddress($_POST['email']);

                $mail2->isHTML(true);

                $mail2->Subject = $_POST["subject"];
                $mail2->Body = "Dear ". $_POST['fname']. ",<br/><br/>
                
                Thank you for connecting GOOD EARTH BAG <br/><br/>

                Your request has been received and we'll get back to you as soon as possible.<br/> If you have any other questions, just let us know, and I’ll be happy to help.<br/><br/><br/><br/>Regards,<br/><br/>GOOD EARTH BAG";
                
                $mail2->AltBody = $_POST['message'];

                try {
                $mail2->send();
                    echo '';
                } 
                catch (Exception $e) {
                        echo "Mailer Error: " . $mail->ErrorInfo;
                }
                // echo "reply Message has been sent";
                
            }
        }
    ?>

</body>
</html>