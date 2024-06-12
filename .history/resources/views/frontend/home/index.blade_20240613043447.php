@extends('frontend.layouts.master')
@section('content')

    <!--=============================
        BANNER START
    ==============================-->
        @include('frontend.home.components.slider')
    <!--=============================
        BANNER END
    ==============================-->


    <!--=============================
        WHY CHOOSE START
    ==============================-->
        @include('frontend.home.components.why-choose')
    <!--=============================
        WHY CHOOSE END
    ==============================-->


    <!--=============================
        OFFER ITEM START
    ==============================-->
        @include('frontend.home.components.offer-item')

    <!-- CART POPUT START -->

    <!-- CART POPUT END -->
    <!--=============================
        OFFER ITEM END
    ==============================-->

    @include('frontend.home.components.cart-popup')
    <!--=============================
        MENU ITEM START
    ==============================-->
    @include('frontend.home.components.menu-item')
    <!--=============================
        MENU ITEM END
    ==============================-->


    <!--=============================
        ADD SLIDER START
    ==============================-->
    <section class="fp__add_slider mt_100 xs_mt_70 pt_100 xs_pt_70 pb_100 xs_pb_70">
        <div class="container">
            <div class="row add_slider wow fadeInUp" data-wow-duration="1s">
                <div class="col-xl-4">
                    <a href="#" class="fp__add_slider_single" style="background: url(images/offer_slider_3.png);">
                        <div class="text">
                            <h3>red chicken</h3>
                            <p>Lorem ipsum dolor sit amet consectetur.</p>
                        </div>
                    </a>
                </div>
                <div class="col-xl-4">
                    <a href="#" class="fp__add_slider_single" style="background: url(images/offer_slider_2.png);">
                        <div class="text">
                            <h3>red chicken</h3>
                            <p>Lorem ipsum dolor sit amet consectetur.</p>
                        </div>
                    </a>
                </div>
                <div class="col-xl-4">
                    <a href="#" class="fp__add_slider_single" style="background: url(images/offer_slider_1.png);">
                        <div class="text">
                            <h3>red chicken</h3>
                            <p>Lorem ipsum dolor sit amet consectetur.</p>
                        </div>
                    </a>
                </div>
                <div class="col-xl-4">
                    <a href="#" class="fp__add_slider_single" style="background: url(images/offer_slider_4.png);">
                        <div class="text">
                            <h3>red chicken</h3>
                            <p>Lorem ipsum dolor sit amet consectetur.</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
        ADD SLIDER END
    ==============================-->


    <!--=============================
        TEAM START
    ==============================-->
    <section class="fp__team pt_95 xs_pt_65 pb_50">
        <div class="container">

            <div class="row wow fadeInUp" data-wow-duration="1s">
                <div class="col-md-8 col-lg-7 col-xl-6 m-auto text-center">
                    <div class="fp__section_heading mb_25">
                        <h4>our team</h4>
                        <h2>meet our expert chefs</h2>
                        <span>
                            <img src="images/heading_shapes.png" alt="shapes" class="img-fluid w-100">
                        </span>
                        <p>Objectively pontificate quality models before intuitive information. Dramatically
                            recaptiualize multifunctional materials.</p>
                    </div>
                </div>
            </div>

            <div class="row team_slider">
                <div class="col-xl-3 wow fadeInUp" data-wow-duration="1s">
                    <div class="fp__single_team">
                        <div class="fp__single_team_img">
                            <img src="images/chef_1.jpg" alt="team" class="img-fluid w-100">
                        </div>
                        <div class="fp__single_team_text">
                            <h4>ismat joha</h4>
                            <p>senior chef</p>
                            <ul class="d-flex flex-wrap justify-content-center">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 wow fadeInUp" data-wow-duration="1s">
                    <div class="fp__single_team">
                        <div class="fp__single_team_img">
                            <img src="images/chef_2.jpg" alt="team" class="img-fluid w-100">
                        </div>
                        <div class="fp__single_team_text">
                            <h4>arun chandra</h4>
                            <p>senior chef</p>
                            <ul class="d-flex flex-wrap justify-content-center">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 wow fadeInUp" data-wow-duration="1s">
                    <div class="fp__single_team">
                        <div class="fp__single_team_img">
                            <img src="images/chef_3.jpg" alt="team" class="img-fluid w-100">
                        </div>
                        <div class="fp__single_team_text">
                            <h4>isita rahman</h4>
                            <p>senior chef</p>
                            <ul class="d-flex flex-wrap justify-content-center">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 wow fadeInUp" data-wow-duration="1s">
                    <div class="fp__single_team">
                        <div class="fp__single_team_img">
                            <img src="images/chef_4.jpg" alt="team" class="img-fluid w-100">
                        </div>
                        <div class="fp__single_team_text">
                            <h4>khandakar rashed</h4>
                            <p>senior chef</p>
                            <ul class="d-flex flex-wrap justify-content-center">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 wow fadeInUp" data-wow-duration="1s">
                    <div class="fp__single_team">
                        <div class="fp__single_team_img">
                            <img src="images/chef_5.jpg" alt="team" class="img-fluid w-100">
                        </div>
                        <div class="fp__single_team_text">
                            <h4>naurin nipu</h4>
                            <p>senior chef</p>
                            <ul class="d-flex flex-wrap justify-content-center">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
        TEAM END
    ==============================-->


    <!--=============================
        DOWNLOAD APP START
    ==============================-->
    <section class="fp__download mt_100 xs_mt_70">
        <div class="fp__download_bg" style="background: url(images/download_bg.jpg);">
            <div class="fp__download_overlay">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-xl-5 col-md-6 wow fadeInUp" data-wow-duration="1s">
                            <div class="fp__download_img">
                                <img src="images/download_img.png" alt="download" class="img-fluid w-100">
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6 wow fadeInUp" data-wow-duration="1s">
                            <div class="fp__download_text">
                                <div class="fp__section_heading mb_25">
                                    <h2>download our mobile apps</h2>
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque assumenda
                                        tenetur,
                                        provident earum consequatur, ut voluptas laboriosam fuga error aut eaque
                                        architecto
                                        quo pariatur. Vel dolore omnis quisquam. Lorem ipsum dolor, sit amet consectetur
                                        adipisicing elit Cumque.</p>
                                </div>
                                <ul class="d-flex flex-wrap">
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-google-play"></i>
                                            <p> <span>download from</span> google play </p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-apple"></i>
                                            <p> <span>download from</span> apple store </p>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
        DOWNLOAD APP END
    ==============================-->


    <!--=============================
       TESTIMONIAL  START
    ==============================-->
    <section class="fp__testimonial pt_95 xs_pt_66 mb_150 xs_mb_120">
        <div class="container">
            <div class="row wow fadeInUp" data-wow-duration="1s">
                <div class="col-md-8 col-lg-7 col-xl-6 m-auto text-center">
                    <div class="fp__section_heading mb_40">
                        <h4>testimonial</h4>
                        <h2>our customar feedbacks</h2>
                        <span>
                            <img src="images/heading_shapes.png" alt="shapes" class="img-fluid w-100">
                        </span>
                        <p>Objectively pontificate quality models before intuitive information. Dramatically
                            recaptiualize multifunctional materials.</p>
                    </div>
                </div>
            </div>

            <div class="row testi_slider">
                <div class="col-xl-4 wow fadeInUp" data-wow-duration="1s">
                    <div class="fp__single_testimonial">
                        <div class="fp__testimonial_header d-flex flex-wrap align-items-center">
                            <div class="img">
                                <img src="images/comment_img_1.png" alt="clients" class="img-fluid w-100">
                            </div>
                            <div class="text">
                                <h4>isita islam</h4>
                                <p>nyc usa</p>
                            </div>
                        </div>
                        <div class="fp__single_testimonial_body">
                            <p class="feedback">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut
                                accusamus
                                praesentium quaerat
                                nihil magnam a porro eaque numquam</p>
                            <span class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 wow fadeInUp" data-wow-duration="1s">
                    <div class="fp__single_testimonial">
                        <div class="fp__testimonial_header d-flex flex-wrap align-items-center">
                            <div class="img">
                                <img src="images/comment_img_2.png" alt="clients" class="img-fluid w-100">
                            </div>
                            <div class="text">
                                <h4>sumon mahmud</h4>
                                <p>nyc usa</p>
                            </div>
                        </div>
                        <div class="fp__single_testimonial_body">
                            <p class="feedback">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut
                                accusamus
                                praesentium quaerat
                                nihil magnam a porro eaque numquam</p>
                            <span class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 wow fadeInUp" data-wow-duration="1s">
                    <div class="fp__single_testimonial">
                        <div class="fp__testimonial_header d-flex flex-wrap align-items-center">
                            <div class="img">
                                <img src="images/client_img_1.jpg" alt="clients" class="img-fluid w-100">
                            </div>
                            <div class="text">
                                <h4>israt jahan</h4>
                                <p>nyc usa</p>
                            </div>
                        </div>
                        <div class="fp__single_testimonial_body">
                            <p class="feedback">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut
                                accusamus
                                praesentium quaerat
                                nihil magnam a porro eaque numquam</p>
                            <span class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 wow fadeInUp" data-wow-duration="1s">
                    <div class="fp__single_testimonial">
                        <div class="fp__testimonial_header d-flex flex-wrap align-items-center">
                            <div class="img">
                                <img src="images/client_img_3.jpg" alt="clients" class="img-fluid w-100">
                            </div>
                            <div class="text">
                                <h4>payel sarkar</h4>
                                <p>nyc usa</p>
                            </div>
                        </div>
                        <div class="fp__single_testimonial_body">
                            <p class="feedback">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut
                                accusamus
                                praesentium quaerat
                                nihil magnam a porro eaque numquam</p>
                            <span class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
        TESTIMONIAL END
    ==============================-->


    <!--=============================
        COUNTER START
    ==============================-->
    <section class="fp__counter" style="background: url(images/counter_bg2.jpg);">
        <div class="fp__counter_overlay pt_100 xs_pt_70 pb_100 xs_pb_70">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-sm-6 col-lg-3 wow fadeInUp" data-wow-duration="1s">
                        <div class="fp__single_counter">
                            <i class="fas fa-burger-soda"></i>
                            <div class="text">
                                <h2 class="counter">85,000</h2>
                                <p>customer serve</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-lg-3 wow fadeInUp" data-wow-duration="1s">
                        <div class="fp__single_counter">
                            <i class="fal fa-hat-chef"></i>
                            <div class="text">
                                <h2 class="counter">120</h2>
                                <p>experience chef</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-lg-3 wow fadeInUp" data-wow-duration="1s">
                        <div class="fp__single_counter">
                            <i class="far fa-handshake"></i>
                            <div class="text">
                                <h2 class="counter">72,000</h2>
                                <p>happy customer</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-lg-3 wow fadeInUp" data-wow-duration="1s">
                        <div class="fp__single_counter">
                            <i class="far fa-trophy"></i>
                            <div class="text">
                                <h2 class="counter">30</h2>
                                <p>winning award</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
        COUNTER END
    ==============================-->


    <!--=============================
        BLOG 2 START
    ==============================-->
    <section class="fp__blog fp__blog2">
        <div class="fp__blog_overlay pt_95 pt_xs_60 pb_100 xs_pb_70">
            <div class="container">
                <div class="row wow fadeInUp" data-wow-duration="1s">
                    <div class="col-md-8 col-lg-7 col-xl-6 m-auto text-center">
                        <div class="fp__section_heading mb_25">
                            <h4>news & blogs</h4>
                            <h2>our latest foods blog</h2>
                            <span>
                                <img src="images/heading_shapes.png" alt="shapes" class="img-fluid w-100">
                            </span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-sm-6 col-lg-4 wow fadeInUp" data-wow-duration="1s">
                        <div class="fp__single_blog">
                            <a href="#" class="fp__single_blog_img">
                                <img src="images/menu2_img_1.jpg" alt="blog" class="img-fluid w-100">
                            </a>
                            <div class="fp__single_blog_text">
                                <a class="category" href="#">chicken</a>
                                <ul class="d-flex flex-wrap mt_15">
                                    <li><i class="fas fa-user"></i>admin</li>
                                    <li><i class="fas fa-calendar-alt"></i> 25 oct 2022</li>
                                    <li><i class="fas fa-comments"></i> 25 comment</li>
                                </ul>
                                <a class="title" href="blog_details.html">Competently supply customized initiatives</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-sm-6 col-lg-4 wow fadeInUp" data-wow-duration="1s">
                        <div class="fp__single_blog">
                            <a href="#" class="fp__single_blog_img">
                                <img src="images/menu2_img_2.jpg" alt="blog" class="img-fluid w-100">
                            </a>
                            <div class="fp__single_blog_text">
                                <a class="category" href="#">kabab</a>
                                <ul class="d-flex flex-wrap mt_15">
                                    <li><i class="fas fa-user"></i>admin</li>
                                    <li><i class="fas fa-calendar-alt"></i> 27 oct 2022</li>
                                    <li><i class="fas fa-comments"></i> 41 comment</li>
                                </ul>
                                <a class="title" href="blog_details.html">Unicode UTF8 Character Sets They Sltimate
                                    Guide Systems</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-sm-6 col-lg-4 wow fadeInUp" data-wow-duration="1s">
                        <div class="fp__single_blog">
                            <a href="#" class="fp__single_blog_img">
                                <img src="images/menu2_img_3.jpg" alt="blog" class="img-fluid w-100">
                            </a>
                            <div class="fp__single_blog_text">
                                <a class="category" href="#">grill</a>
                                <ul class="d-flex flex-wrap mt_15">
                                    <li><i class="fas fa-user"></i>admin</li>
                                    <li><i class="fas fa-calendar-alt"></i> 27 oct 2022</li>
                                    <li><i class="fas fa-comments"></i> 32 comment</li>
                                </ul>
                                <a class="title" href="blog_details.html">Quality Foods Requirments For Every Human
                                    Body’s</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
        BLOG 2 END
    ==============================-->


@endsection
