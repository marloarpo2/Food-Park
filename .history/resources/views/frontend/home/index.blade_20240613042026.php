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
        @include('frontend.home.components.slider')
    <!--=============================
        WHY CHOOSE END
    ==============================-->


    <!--=============================
        OFFER ITEM START
    ==============================-->
    <section class="fp__offer_item mt_100 xs_mt_70 pt_95 xs_pt_65 pb_150 xs_pb_120">
        <div class="container">
            <div class="row wow fadeInUp" data-wow-duration="1s">
                <div class="col-md-8 col-lg-7 col-xl-6 m-auto text-center">
                    <div class="fp__section_heading mb_50">
                        <h4>daily offer</h4>
                        <h2>up to 75% off for this day</h2>
                        <span>
                            <img src="images/heading_shapes.png" alt="shapes" class="img-fluid w-100">
                        </span>
                        <p>Objectively pontificate quality models before intuitive information. Dramatically
                            recaptiualize multifunctional materials.</p>
                    </div>
                </div>
            </div>

            <div class="row offer_item_slider wow fadeInUp" data-wow-duration="1s">
                <div class="col-xl-4">
                    <div class="fp__offer_item_single">
                        <div class="img">
                            <img src="images/slider_img_1.png" alt="offer" class="img-fluid w-100">
                        </div>
                        <div class="text">
                            <span>30% off</span>
                            <a class="title" href="menu_details.html">Dal Makhani Paneer</a>
                            <p>Lightly smoked and minced pork tenderloin topped</p>
                            <ul class="d-flex flex-wrap">
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#cartModal"><i
                                            class="fas fa-shopping-basket"></i></a></li>
                                <li><a href="#"><i class="fal fa-heart"></i></a></li>
                                <li><a href="#"><i class="far fa-eye"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="fp__offer_item_single">
                        <div class="img">
                            <img src="images/slider_img_2.png" alt="offer" class="img-fluid w-100">
                        </div>
                        <div class="text">
                            <span>40% off</span>
                            <a class="title" href="menu_details.html">Hyderabadi biryani</a>
                            <p>Lightly smoked and minced pork tenderloin topped</p>
                            <ul class="d-flex flex-wrap">
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#cartModal"><i
                                            class="fas fa-shopping-basket"></i></a></li>
                                <li><a href="#"><i class="fal fa-heart"></i></a></li>
                                <li><a href="#"><i class="far fa-eye"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="fp__offer_item_single">
                        <div class="img">
                            <img src="images/slider_img_3.png" alt="offer" class="img-fluid w-100">
                        </div>
                        <div class="text">

                            <span>55% off</span>
                            <a class="title" href="menu_details.html">Beef Masala Salad</a>
                            <p>Lightly smoked and minced pork tenderloin topped</p>
                            <ul class="d-flex flex-wrap">
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#cartModal"><i
                                            class="fas fa-shopping-basket"></i></a></li>
                                <li><a href="#"><i class="fal fa-heart"></i></a></li>
                                <li><a href="#"><i class="far fa-eye"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="fp__offer_item_single">
                        <div class="img">
                            <img src="images/slider_img_2.png" alt="offer" class="img-fluid w-100">
                        </div>
                        <div class="text">
                            <span>45% off</span>
                            <a class="title" href="menu_details.html">Indian cuisine Pakora</a>
                            <p>Lightly smoked and minced pork tenderloin topped</p>
                            <ul class="d-flex flex-wrap">
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#cartModal"><i
                                            class="fas fa-shopping-basket"></i></a></li>
                                <li><a href="#"><i class="fal fa-heart"></i></a></li>
                                <li><a href="#"><i class="far fa-eye"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CART POPUT START -->
    <div class="fp__cart_popup">
        <div class="modal fade" id="cartModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                                class="fal fa-times"></i></button>
                        <div class="fp__cart_popup_img">
                            <img src="images/menu1.png" alt="menu" class="img-fluid w-100">
                        </div>
                        <div class="fp__cart_popup_text">
                            <a href="#" class="title">Maxican Pizza Test Better</a>
                            <p class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                                <span>(201)</span>
                            </p>
                            <h4 class="price">$320.00 <del>$350.00</del> </h4>

                            <div class="details_size">
                                <h5>select size</h5>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="large"
                                        checked>
                                    <label class="form-check-label" for="large">
                                        large <span>+ $350</span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="medium">
                                    <label class="form-check-label" for="medium">
                                        medium <span>+ $250</span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="small">
                                    <label class="form-check-label" for="small">
                                        small <span>+ $150</span>
                                    </label>
                                </div>
                            </div>

                            <div class="details_extra_item">
                                <h5>select option <span>(optional)</span></h5>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="coca-cola">
                                    <label class="form-check-label" for="coca-cola">
                                        coca-cola <span>+ $10</span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="7up">
                                    <label class="form-check-label" for="7up">
                                        7up <span>+ $15</span>
                                    </label>
                                </div>
                            </div>

                            <div class="details_quentity">
                                <h5>select quentity</h5>
                                <div class="quentity_btn_area d-flex flex-wrapa align-items-center">
                                    <div class="quentity_btn">
                                        <button class="btn btn-danger"><i class="fal fa-minus"></i></button>
                                        <input type="text" placeholder="1">
                                        <button class="btn btn-success"><i class="fal fa-plus"></i></button>
                                    </div>
                                    <h3>$320.00</h3>
                                </div>
                            </div>
                            <ul class="details_button_area d-flex flex-wrap">
                                <li><a class="common_btn" href="#">add to cart</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CART POPUT END -->
    <!--=============================
        OFFER ITEM END
    ==============================-->


    <!--=============================
        MENU ITEM START
    ==============================-->
    <section class="fp__menu mt_95 xs_mt_65">
        <div class="container">
            <div class="row wow fadeInUp" data-wow-duration="1s">
                <div class="col-md-8 col-lg-7 col-xl-6 m-auto text-center">
                    <div class="fp__section_heading mb_45">
                        <h4>food Menu</h4>
                        <h2>Our Popular Delicious Foods</h2>
                        <span>
                            <img src="images/heading_shapes.png" alt="shapes" class="img-fluid w-100">
                        </span>
                        <p>Objectively pontificate quality models before intuitive information. Dramatically
                            recaptiualize multifunctional materials.</p>
                    </div>
                </div>
            </div>

            <div class="row wow fadeInUp" data-wow-duration="1s">
                <div class="col-12">
                    <div class="menu_filter d-flex flex-wrap justify-content-center">
                        <button class=" active" data-filter="*">all menu</button>
                        <button data-filter=".burger">burger</button>
                        <button data-filter=".chicken">chicken</button>
                        <button data-filter=".pizza">pizza</button>
                        <button data-filter=".dresserts">dresserts</button>
                    </div>
                </div>
            </div>

            <div class="row grid">
                <div class="col-xl-3 col-sm-6 col-lg-4 burger pizza wow fadeInUp" data-wow-duration="1s">
                    <div class="fp__menu_item">
                        <div class="fp__menu_item_img">
                            <img src="images/menu2_img_1.jpg" alt="menu" class="img-fluid w-100">
                            <a class="category" href="#">Biryani</a>
                        </div>
                        <div class="fp__menu_item_text">
                            <p class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                                <span>10</span>
                            </p>
                            <a class="title" href="menu_details.html">Hyderabadi biryani</a>
                            <h5 class="price">$70.00</h5>
                            <ul class="d-flex flex-wrap justify-content-center">
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#cartModal"><i
                                            class="fas fa-shopping-basket"></i></a></li>
                                <li><a href="#"><i class="fal fa-heart"></i></a></li>
                                <li><a href="#"><i class="far fa-eye"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-4  chicken dresserts wow fadeInUp" data-wow-duration="1s">
                    <div class="fp__menu_item">
                        <div class="fp__menu_item_img">
                            <img src="images/menu2_img_2.jpg" alt="menu" class="img-fluid w-100">
                            <a class="category" href="#">chicken</a>
                        </div>
                        <div class="fp__menu_item_text">
                            <p class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                                <span>145</span>
                            </p>
                            <a class="title" href="menu_details.html">chicken Masala</a>
                            <h5 class="price">$80.00 <del>90.00</del></h5>
                            <ul class="d-flex flex-wrap justify-content-center">
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#cartModal"><i
                                            class="fas fa-shopping-basket"></i></a></li>
                                <li><a href="#"><i class="fal fa-heart"></i></a></li>
                                <li><a href="#"><i class="far fa-eye"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-4  chicken dresserts wow fadeInUp" data-wow-duration="1s">
                    <div class="fp__menu_item">
                        <div class="fp__menu_item_img">
                            <img src="images/menu2_img_3.jpg" alt="menu" class="img-fluid w-100">
                            <a class="category" href="#">grill</a>
                        </div>
                        <div class="fp__menu_item_text">
                            <p class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                                <span>54</span>
                            </p>
                            <a class="title" href="menu_details.html">daria shevtsova</a>
                            <h5 class="price">$99.00</h5>
                            <ul class="d-flex flex-wrap justify-content-center">
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#cartModal"><i
                                            class="fas fa-shopping-basket"></i></a></li>
                                <li><a href="#"><i class="fal fa-heart"></i></a></li>
                                <li><a href="#"><i class="far fa-eye"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-4  burger pizza wow fadeInUp" data-wow-duration="1s">
                    <div class="fp__menu_item">
                        <div class="fp__menu_item_img">
                            <img src="images/menu2_img_4.jpg" alt="menu" class="img-fluid w-100">
                            <a class="category" href="#">chicken</a>
                        </div>
                        <div class="fp__menu_item_text">
                            <p class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                                <span>74</span>
                            </p>
                            <a class="title" href="menu_details.html">chicken Masala</a>
                            <h5 class="price">$80.00 <del>90.00</del></h5>
                            <ul class="d-flex flex-wrap justify-content-center">
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#cartModal"><i
                                            class="fas fa-shopping-basket"></i></a></li>
                                <li><a href="#"><i class="fal fa-heart"></i></a></li>
                                <li><a href="#"><i class="far fa-eye"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-4  chicken dresserts wow fadeInUp" data-wow-duration="1s">
                    <div class="fp__menu_item">
                        <div class="fp__menu_item_img">
                            <img src="images/menu2_img_5.jpg" alt="menu" class="img-fluid w-100">
                            <a class="category" href="#">chicken</a>
                        </div>
                        <div class="fp__menu_item_text">
                            <p class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                                <span>120</span>
                            </p>
                            <a class="title" href="menu_details.html">chicken Masala</a>
                            <h5 class="price">$80.00 <del>90.00</del></h5>
                            <ul class="d-flex flex-wrap justify-content-center">
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#cartModal"><i
                                            class="fas fa-shopping-basket"></i></a></li>
                                <li><a href="#"><i class="fal fa-heart"></i></a></li>
                                <li><a href="#"><i class="far fa-eye"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-4  burger pizza wow fadeInUp" data-wow-duration="1s">
                    <div class="fp__menu_item">
                        <div class="fp__menu_item_img">
                            <img src="images/menu2_img_6.jpg" alt="menu" class="img-fluid w-100">
                            <a class="category" href="#">Biryani</a>
                        </div>
                        <div class="fp__menu_item_text">
                            <p class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                                <span>514</span>
                            </p>
                            <a class="title" href="menu_details.html">Hyderabadi biryani</a>
                            <h5 class="price">$70.00</h5>
                            <ul class="d-flex flex-wrap justify-content-center">
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#cartModal"><i
                                            class="fas fa-shopping-basket"></i></a></li>
                                <li><a href="#"><i class="fal fa-heart"></i></a></li>
                                <li><a href="#"><i class="far fa-eye"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-4  chicken dresserts wow fadeInUp" data-wow-duration="1s">
                    <div class="fp__menu_item">
                        <div class="fp__menu_item_img">
                            <img src="images/menu2_img_7.jpg" alt="menu" class="img-fluid w-100">
                            <a class="category" href="#">grill</a>
                        </div>
                        <div class="fp__menu_item_text">
                            <p class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                                <span>25</span>
                            </p>
                            <a class="title" href="menu_details.html">daria shevtsova</a>
                            <h5 class="price">$99.00</h5>
                            <ul class="d-flex flex-wrap justify-content-center">
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#cartModal"><i
                                            class="fas fa-shopping-basket"></i></a></li>
                                <li><a href="#"><i class="fal fa-heart"></i></a></li>
                                <li><a href="#"><i class="far fa-eye"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-4  burger pizza wow fadeInUp" data-wow-duration="1s">
                    <div class="fp__menu_item">
                        <div class="fp__menu_item_img">
                            <img src="images/menu2_img_8.jpg" alt="menu" class="img-fluid w-100">
                            <a class="category" href="#">chicken</a>
                        </div>
                        <div class="fp__menu_item_text">
                            <p class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                                <span>324</span>
                            </p>
                            <a class="title" href="menu_details.html">chicken Masala</a>
                            <h5 class="price">$80.00 <del>90.00</del></h5>
                            <ul class="d-flex flex-wrap justify-content-center">
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#cartModal"><i
                                            class="fas fa-shopping-basket"></i></a></li>
                                <li><a href="#"><i class="fal fa-heart"></i></a></li>
                                <li><a href="#"><i class="far fa-eye"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
