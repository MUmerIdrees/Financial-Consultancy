<?php include './header.php' ?>

<!--Page Header Start-->
<section class="page-header">
    <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg);">
    </div>
    <div class="page-header__shape-one float-bob-x-2"></div>
    <div class="page-header__shape-2 float-bob-y">
        <img src="assets/images/shapes/page-header-shape-2.png" alt="">
    </div>
    <div class="page-header__shape-3 float-bob-x">
        <img src="assets/images/shapes/page-header-shape-3.png" alt="">
    </div>
    <div class="page-header__shape-4 float-bob-y">
        <img src="assets/images/shapes/page-header-shape-4.png" alt="">
    </div>
    <div class="container">
        <div class="page-header__inner text-left">
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="index.php">Home</a></li>
                <li>Contact</li>
            </ul>
            <h2>Contact us</h2>
        </div>
    </div>
</section>
<!--Page Header End-->


<!--Address Start-->
<section class="address">
    <div class="container">
        <div class="row">
            <!--Address Single Start-->
            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                <div class="address__single">
                    <div class="address__icon">
                        <span class="icon-location"></span>
                    </div>
                    <div class="address__content">
                        <h4 class="address__title">Address</h4>
                        <div class="address__phone-email">
                            <p>House 1, Street 1 <br> Country</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--Address Single End-->
            <!--Address Single Start-->
            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                <div class="address__single">
                    <div class="address__icon">
                        <span class="icon-phone-income"></span>
                    </div>
                    <div class="address__content">
                        <h4 class="address__title">Phone</h4>
                        <div class="address__phone-email">
                            <p>
                                <a href="tel:+1234567890">+1234567890</a>
                                <a href="tel:021234567">02 1234567</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!--Address Single End-->
            <!--Address Single Start-->
            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                <div class="address__single">
                    <div class="address__icon">
                        <span class="icon-email"></span>
                    </div>
                    <div class="address__content">
                        <h4 class="address__title">Email Address</h4>
                        <div class="address__phone-email">
                            <p>
                                <a href="mailto:info@gmail.com">+info@gmail.com</a>
                                <a href="mailto:support@gmail.com">support@gmail.com</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!--Address Single End-->
        </div>
    </div>
</section>
<!--Address End-->

<!--Contact Form Start-->
<section class="contact-form-box">
    <div class="container">
        <div class="contact-form__title-box">
            <h3>Contact With Us</h3>
        </div>
        <form method="post" action="./final_email/email/mail.php" class="contact-form">
            <div class="row">
                <div class="col-xl-12">
                    <div class="contact-form__input-box">
                        <p>Name</p>
                        <input type="text" placeholder="" name="name">
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="contact-form__input-box">
                        <p>Email</p>
                        <input type="email" placeholder="" name="email">
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="contact-form__input-box">
                        <p>Phone</p>
                        <input type="text" placeholder="" name="phone">
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="contact-form__input-box">
                        <p>Subject</p>
                        <input type="text" placeholder="" name="subject">
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="contact-form__input-box text-message-box">
                        <textarea name="message" placeholder="Type your message"></textarea>
                    </div>
                    <div class="contact-form__btn-box">
                        <button type="submit" name="send" class="thm-btn contact-form__btn rounded-3">Send A Message</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
<!--Contact Form End-->

<?php include './footer.php' ?>