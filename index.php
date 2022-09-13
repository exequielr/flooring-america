<?php
get_header();
$hero = get_field('hero');
$explore = get_field('explore');
$see = get_field('see_your_floor');
$samples = get_field('samples');
$store = get_field('find_store');
$reviews = get_field('reviews');
$why = get_field('why');

include "sections/hero.php";
include "sections/promo-area.php";

?>
<section class="navigation" id="timeline-header">
    <div class="container-lg">
        <p class="navigation__title padding--single">
            Room to explore
        </p>
        <h2 class="navigation__heading padding--double">
            Dream it. Plan it. <strong class="text-nowrap">Do it.</strong>
        </h2>
        <p class="navigation__tagline">
            With our ROOM TO EXPLORE experience, finding the right floor is simple—every step of the way.</p>
    </div>
</section>
<section class="navigation navigation--sticky" id="homepage-timeline">
    <div class="navigation__wrapper list-group">
        <div class="list-group-item navppeigation__button-wrar" href="#explore-products">
            <span class="navigation__section-title">Explore Products</span>
            <a href="#explore-products" class="navigation__button button-cta button-cta--circular button-cta--regular
               button-cta--icon">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.0005 7.00103C9.44823 7.00103 9.00052 7.44874 9.00052 8.00103C9.00052 8.55331 9.44823 9.00103 10.0005 9.00103V7.00103ZM10.0022 8.00103L10.7092 8.70826C10.8968 8.52072 11.0022 8.26631 11.0022 8.00104C11.0022 7.73577 10.8968 7.48136 10.7092 7.29381L10.0022 8.00103ZM5.29302 11.2946C4.90243 11.685 4.90231 12.3182 5.29277 12.7088C5.68322 13.0994 6.31639 13.0995 6.70698 12.7091L5.29302 11.2946ZM6.707 3.29279C6.31642 2.90232 5.68325 2.90242 5.29279 3.293C4.90232 3.68358 4.90242 4.31675 5.293 4.70721L6.707 3.29279ZM10.0005 9.00103H10.0022V7.00103H10.0005V9.00103ZM6.70698 12.7091L10.7092 8.70826L9.29525 7.29379L5.29302 11.2946L6.70698 12.7091ZM10.7092 7.29381L6.707 3.29279L5.293 4.70721L9.29523 8.70824L10.7092 7.29381Z" fill="white" />
                </svg>
            </a>
        </div>
        <div class="list-group-item navigation__button-wrapper" href="#see-your-floor">
            <span class="navigation__section-title">See Your Floor</span>
            <a href="#see-your-floor" class="navigation__button button-cta button-cta--circular button-cta--regular button-cta--icon">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.0005 7.00103C9.44823 7.00103 9.00052 7.44874 9.00052 8.00103C9.00052 8.55331 9.44823 9.00103 10.0005 9.00103V7.00103ZM10.0022 8.00103L10.7092 8.70826C10.8968 8.52072 11.0022 8.26631 11.0022 8.00104C11.0022 7.73577 10.8968 7.48136 10.7092 7.29381L10.0022 8.00103ZM5.29302 11.2946C4.90243 11.685 4.90231 12.3182 5.29277 12.7088C5.68322 13.0994 6.31639 13.0995 6.70698 12.7091L5.29302 11.2946ZM6.707 3.29279C6.31642 2.90232 5.68325 2.90242 5.29279 3.293C4.90232 3.68358 4.90242 4.31675 5.293 4.70721L6.707 3.29279ZM10.0005 9.00103H10.0022V7.00103H10.0005V9.00103ZM6.70698 12.7091L10.7092 8.70826L9.29525 7.29379L5.29302 11.2946L6.70698 12.7091ZM10.7092 7.29381L6.707 3.29279L5.293 4.70721L9.29523 8.70824L10.7092 7.29381Z" fill="white" />
                </svg>
            </a>
        </div>
        <div class="list-group-item navigation__button-wrapper" href="#be-inspired">
            <span class="navigation__section-title">Be Inspired</span>
            <a href="#be-inspired" class="navigation__button button-cta button-cta--circular button-cta--regular button-cta--icon">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.0005 7.00103C9.44823 7.00103 9.00052 7.44874 9.00052 8.00103C9.00052 8.55331 9.44823 9.00103 10.0005 9.00103V7.00103ZM10.0022 8.00103L10.7092 8.70826C10.8968 8.52072 11.0022 8.26631 11.0022 8.00104C11.0022 7.73577 10.8968 7.48136 10.7092 7.29381L10.0022 8.00103ZM5.29302 11.2946C4.90243 11.685 4.90231 12.3182 5.29277 12.7088C5.68322 13.0994 6.31639 13.0995 6.70698 12.7091L5.29302 11.2946ZM6.707 3.29279C6.31642 2.90232 5.68325 2.90242 5.29279 3.293C4.90232 3.68358 4.90242 4.31675 5.293 4.70721L6.707 3.29279ZM10.0005 9.00103H10.0022V7.00103H10.0005V9.00103ZM6.70698 12.7091L10.7092 8.70826L9.29525 7.29379L5.29302 11.2946L6.70698 12.7091ZM10.7092 7.29381L6.707 3.29279L5.293 4.70721L9.29523 8.70824L10.7092 7.29381Z" fill="white" />
                </svg>
            </a>
        </div>
        <div class="list-group-item navigation__button-wrapper" href="#my-samples">
            <span class="navigation__section-title">Order Samples</span>
            <a href="#my-samples" class="navigation__button button-cta button-cta--circular button-cta--regular button-cta--icon">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.0005 7.00103C9.44823 7.00103 9.00052 7.44874 9.00052 8.00103C9.00052 8.55331 9.44823 9.00103 10.0005 9.00103V7.00103ZM10.0022 8.00103L10.7092 8.70826C10.8968 8.52072 11.0022 8.26631 11.0022 8.00104C11.0022 7.73577 10.8968 7.48136 10.7092 7.29381L10.0022 8.00103ZM5.29302 11.2946C4.90243 11.685 4.90231 12.3182 5.29277 12.7088C5.68322 13.0994 6.31639 13.0995 6.70698 12.7091L5.29302 11.2946ZM6.707 3.29279C6.31642 2.90232 5.68325 2.90242 5.29279 3.293C4.90232 3.68358 4.90242 4.31675 5.293 4.70721L6.707 3.29279ZM10.0005 9.00103H10.0022V7.00103H10.0005V9.00103ZM6.70698 12.7091L10.7092 8.70826L9.29525 7.29379L5.29302 11.2946L6.70698 12.7091ZM10.7092 7.29381L6.707 3.29279L5.293 4.70721L9.29523 8.70824L10.7092 7.29381Z" fill="white" />
                </svg>
            </a>
        </div>
        <div class="list-group-item navigation__button-wrapper" href="#find-store">
            <span class="navigation__section-title">Find a Store</span>
            <a href="#find-store" class="navigation__button button-cta button-cta--circular button-cta--regular button-cta--icon">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.0005 7.00103C9.44823 7.00103 9.00052 7.44874 9.00052 8.00103C9.00052 8.55331 9.44823 9.00103 10.0005 9.00103V7.00103ZM10.0022 8.00103L10.7092 8.70826C10.8968 8.52072 11.0022 8.26631 11.0022 8.00104C11.0022 7.73577 10.8968 7.48136 10.7092 7.29381L10.0022 8.00103ZM5.29302 11.2946C4.90243 11.685 4.90231 12.3182 5.29277 12.7088C5.68322 13.0994 6.31639 13.0995 6.70698 12.7091L5.29302 11.2946ZM6.707 3.29279C6.31642 2.90232 5.68325 2.90242 5.29279 3.293C4.90232 3.68358 4.90242 4.31675 5.293 4.70721L6.707 3.29279ZM10.0005 9.00103H10.0022V7.00103H10.0005V9.00103ZM6.70698 12.7091L10.7092 8.70826L9.29525 7.29379L5.29302 11.2946L6.70698 12.7091ZM10.7092 7.29381L6.707 3.29279L5.293 4.70721L9.29523 8.70824L10.7092 7.29381Z" fill="white" />
                </svg>
            </a>
        </div>
        <div class="list-group-item navigation__button-wrapper" href="#why-fa">
            <span class="navigation__section-title">Why Flooring America?</span>
            <a href="#why-fa" class="navigation__button button-cta button-cta--circular button-cta--regular button-cta--icon">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.0005 7.00103C9.44823 7.00103 9.00052 7.44874 9.00052 8.00103C9.00052 8.55331 9.44823 9.00103 10.0005 9.00103V7.00103ZM10.0022 8.00103L10.7092 8.70826C10.8968 8.52072 11.0022 8.26631 11.0022 8.00104C11.0022 7.73577 10.8968 7.48136 10.7092 7.29381L10.0022 8.00103ZM5.29302 11.2946C4.90243 11.685 4.90231 12.3182 5.29277 12.7088C5.68322 13.0994 6.31639 13.0995 6.70698 12.7091L5.29302 11.2946ZM6.707 3.29279C6.31642 2.90232 5.68325 2.90242 5.29279 3.293C4.90232 3.68358 4.90242 4.31675 5.293 4.70721L6.707 3.29279ZM10.0005 9.00103H10.0022V7.00103H10.0005V9.00103ZM6.70698 12.7091L10.7092 8.70826L9.29525 7.29379L5.29302 11.2946L6.70698 12.7091ZM10.7092 7.29381L6.707 3.29279L5.293 4.70721L9.29523 8.70824L10.7092 7.29381Z" fill="white" />
                </svg>
            </a>
        </div>
        <div class="navigation__progress-bar">
            <div class="navigation__progress-bar-start"></div>
            <div class="navigation__progress-bar-end"></div>
        </div>
    </div>
    </div>
</section>

<?php if ($explore) : ?>
    <section class="explore-products image-with-text image-with-text--image-left background-white">
        <div class="image-with-text__image-container">
            <div class="image-with-text__image-wrapper">
                <div class="row">
                    <div class="col-lg-6 col-12 g-md-0">
                        <img src="<?php echo $explore['image'] ?>" alt="Some Alt Text">
                    </div>
                </div>
            </div>
        </div>
        <div class="image-with-text__text-container">
            <div class="container-fluid-lg container">
                <div class="row">
                    <div class=" offset-lg-7 col-lg-5 col-12 g-md-0">
                        <div class="image-with-text__text-wrapper">
                            <div class="image-with-text__top-heading padding--single" id="explore-products">
                                <?php echo $explore['subtitle'] ?>
                            </div>
                            <h2 class="image-with-text__heading padding--double">
                                <?php echo $explore['title'] ?>
                            </h2>
                            <img class="image-with-text__mobile-image padding--triple" src="<?php echo $explore['image'] ?>" alt="Some Alt Text">
                            <p class="padding--quadruple">
                                <?php echo $explore['text'] ?>
                            </p>
                            <div class="image-with-text__two-ctas">
                                <div class="image-with-text__cta">
                                    <a href="https://google.com" target="_blank" class="button-cta">
                                        <?php echo $explore['cta_button'] ?>
                                    </a>
                                </div>
                                <div class="image-with-text__cta">
                                    <a href="https://google.com" target="_blank" class="text-cta">
                                        <?php echo $explore['link'] ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif ?>

<?php include "sections/vertical-carousel.php" ?>

<?php if ($see) : ?>
    <section class="see-your-floor image-with-text section--light-bg">
        <div class="image-with-text__text-container">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-xxl-4 col-12">
                        <div class="image-with-text__top-heading padding--single" id="see-your-floor">
                            <?php echo $see['subtitle'] ?>
                        </div>
                        <h2 class="image-with-text__heading padding--double">
                            <?php echo $see['title'] ?>
                        </h2>
                        <img src="<?php echo $see['image'] ?>" class="image-with-text__mobile-image padding--triple" autoplay loop muted></img>
                        <p class="padding--quadruple">
                            <?php echo $see['text'] ?>
                        </p>
                        <a href="https://google.com" target="_blank" class="button-cta">
                            <?php echo $see['cta_button'] ?>
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.0005 7.00103C9.44823 7.00103 9.00052 7.44874 9.00052 8.00103C9.00052 8.55331 9.44823 9.00103 10.0005 9.00103V7.00103ZM10.0022 8.00103L10.7092 8.70826C10.8968 8.52072 11.0022 8.26631 11.0022 8.00104C11.0022 7.73577 10.8968 7.48136 10.7092 7.29381L10.0022 8.00103ZM5.29302 11.2946C4.90243 11.685 4.90231 12.3182 5.29277 12.7088C5.68322 13.0994 6.31639 13.0995 6.70698 12.7091L5.29302 11.2946ZM6.707 3.29279C6.31642 2.90232 5.68325 2.90242 5.29279 3.293C4.90232 3.68358 4.90242 4.31675 5.293 4.70721L6.707 3.29279ZM10.0005 9.00103H10.0022V7.00103H10.0005V9.00103ZM6.70698 12.7091L10.7092 8.70826L9.29525 7.29379L5.29302 11.2946L6.70698 12.7091ZM10.7092 7.29381L6.707 3.29279L5.293 4.70721L9.29523 8.70824L10.7092 7.29381Z">
                                </path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="image-with-text__image-container">
            <div class="image-with-text__image-wrapper">
                <div class="row">
                    <div class="offset-md-6 col-lg-6 col-12 g-md-0">
                        <img src="http://localhost/wordpress/wp-content/uploads/2022/09/why-wait-mobile.jpg"></img>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif ?>

<?php include "sections/floors-carousel.php" ?>

<?php if ($samples) : ?>
    <section class="my-samples image-with-text section--lightest-bg  section--half-padding">
        <div class="image-with-text__text-container">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-12">
                        <div class="image-with-text__top-heading padding--single" id="my-samples">
                            <?php echo $samples['subtitle'] ?>
                        </div>
                        <h2 class="image-with-text__heading padding--double">
                            <?php echo $samples['title'] ?>
                        </h2>
                        <img src="<?php echo $samples['image'] ?>" class="image-with-text__mobile-image padding--triple" autoplay loop muted></img>
                        <p class="padding--quadruple">
                        <p class="padding--quadruple">
                            <?php echo $samples['text'] ?>
                        </p>
                        <a href="https://google.com" target="_blank" class="button-cta">
                            <?php echo $samples['cta_button'] ?>
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.0005 7.00103C9.44823 7.00103 9.00052 7.44874 9.00052 8.00103C9.00052 8.55331 9.44823 9.00103 10.0005 9.00103V7.00103ZM10.0022 8.00103L10.7092 8.70826C10.8968 8.52072 11.0022 8.26631 11.0022 8.00104C11.0022 7.73577 10.8968 7.48136 10.7092 7.29381L10.0022 8.00103ZM5.29302 11.2946C4.90243 11.685 4.90231 12.3182 5.29277 12.7088C5.68322 13.0994 6.31639 13.0995 6.70698 12.7091L5.29302 11.2946ZM6.707 3.29279C6.31642 2.90232 5.68325 2.90242 5.29279 3.293C4.90232 3.68358 4.90242 4.31675 5.293 4.70721L6.707 3.29279ZM10.0005 9.00103H10.0022V7.00103H10.0005V9.00103ZM6.70698 12.7091L10.7092 8.70826L9.29525 7.29379L5.29302 11.2946L6.70698 12.7091ZM10.7092 7.29381L6.707 3.29279L5.293 4.70721L9.29523 8.70824L10.7092 7.29381Z">
                                </path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="image-with-text__image-container">
            <div class="image-with-text__image-wrapper">
                <div class="row">
                    <div class="offset-md-7 col-lg-5 col-12 g-md-0">
                        <img src="http://localhost/wordpress/wp-content/uploads/2022/09/seeing-and-feeling.jpg" autoplay loop muted></img>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif ?>

<?php if ($store) : ?>
    <section class="find-store image-with-text image-with-text--image-left section--lightest-bg section--half-padding-top">
        <div class="image-with-text__image-container">
            <div class="image-with-text__image-wrapper">
                <div class="row">
                    <div class="col-lg-7 col-12 g-md-0 spacing--triple">
                        <img src="<?php echo $store['image'] ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="image-with-text__text-container">
            <div class="container-fluid-lg container">
                <div class="row">
                    <div class=" offset-lg-7 col-lg-5 col-12 g-md-0">
                        <div class="image-with-text__text-wrapper">
                            <div class="image-with-text__top-heading padding--single" id="find-store">
                                <?php echo $store['subtitle'] ?>
                            </div>
                            <h2 class="image-with-text__heading padding--double">
                                <?php echo $store['title'] ?>
                            </h2>
                            <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                            <lottie-player class="image-with-text__mobile-image" src="src/assets/lottie/data.json" background="transparent" speed="1" style="width: 100%; height: 100%;" loop autoplay>
                            </lottie-player>
                            <p class="padding--quadruple">
                                <?php echo $store['text'] ?>
                            </p>
                            <a href="https://google.com" target="_blank" class="button-cta button-cta--no-svg-fill">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_260_7518)">
                                        <path d="M1.82935 8.65609C2.3819 9.95624 3.42829 10.9836 4.73834 11.5123C6.04839 12.0409 7.51478 12.0274 8.81492 11.4749C10.1151 10.9224 11.1425 9.87596 11.6711 8.56591C12.1997 7.25586 12.1863 5.78948 11.6337 4.48933C11.0812 3.18919 10.0348 2.1618 8.72474 1.63317C7.41469 1.10454 5.9483 1.11798 4.64816 1.67053C3.34802 2.22307 2.32063 3.26947 1.792 4.57952C1.26337 5.88956 1.27681 7.35595 1.82935 8.65609V8.65609Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M10.4977 10.3389L14.6288 14.4706" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_260_7518">
                                            <rect width="16" height="16" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                <?php echo $store['cta_button'] ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif ?>

<?php if ($reviews) : ?>
    <section class="reviews image-with-text section--half-padding-bottom">
        <div class="image-with-text__text-container">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-12">
                        <div class="image-with-text__top-heading padding--single">
                            <?php echo $reviews['subtitle'] ?>
                        </div>
                        <h2 class="image-with-text__heading padding--double">
                            <?php echo $reviews['title'] ?>
                        </h2>
                        <img class="image-with-text__mobile-image padding--triple" src="<?php echo $reviews['image'] ?>" alt="Some Alt Text">
                        <h5 class="padding--triple review__rate-heading"> <?php echo $reviews['text'] ?> </h5>
                        <div class="review">
                            <div class="">
                                <div class="review__rate-summary padding--quadruple">
                                    <div class="review__rate">
                                        4.7
                                    </div>
                                    <div class="review__review-stars padding--half">
                                        <svg class="review__star-icon review__star-icon--active" width="22" height="21" viewBox="0 0 22 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10.0547 0.739745C10.3647 -0.158699 11.6353 -0.158697 11.9453 0.739747L13.8131 6.15312C13.9501 6.55009 14.3205 6.8192 14.7404 6.82679L20.466 6.93036C21.4162 6.94755 21.8089 8.15599 21.0502 8.72845L16.479 12.1777C16.1437 12.4306 16.0023 12.866 16.1248 13.2677L17.7956 18.7451C18.0729 19.6541 17.0449 20.401 16.2661 19.8564L11.5731 16.5747C11.2289 16.3341 10.7711 16.3341 10.4269 16.5747L5.73395 19.8564C4.95506 20.401 3.9271 19.6541 4.2044 18.7451L5.87521 13.2677C5.99773 12.866 5.85626 12.4306 5.52104 12.1777L0.9498 8.72845C0.191123 8.15599 0.583772 6.94755 1.53404 6.93036L7.25965 6.82679C7.67952 6.8192 8.04991 6.55009 8.18688 6.15312L10.0547 0.739745Z" />
                                        </svg>
                                        <svg class="review__star-icon review__star-icon--active" width="22" height="21" viewBox="0 0 22 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10.0547 0.739745C10.3647 -0.158699 11.6353 -0.158697 11.9453 0.739747L13.8131 6.15312C13.9501 6.55009 14.3205 6.8192 14.7404 6.82679L20.466 6.93036C21.4162 6.94755 21.8089 8.15599 21.0502 8.72845L16.479 12.1777C16.1437 12.4306 16.0023 12.866 16.1248 13.2677L17.7956 18.7451C18.0729 19.6541 17.0449 20.401 16.2661 19.8564L11.5731 16.5747C11.2289 16.3341 10.7711 16.3341 10.4269 16.5747L5.73395 19.8564C4.95506 20.401 3.9271 19.6541 4.2044 18.7451L5.87521 13.2677C5.99773 12.866 5.85626 12.4306 5.52104 12.1777L0.9498 8.72845C0.191123 8.15599 0.583772 6.94755 1.53404 6.93036L7.25965 6.82679C7.67952 6.8192 8.04991 6.55009 8.18688 6.15312L10.0547 0.739745Z" />
                                        </svg>
                                        <svg class="review__star-icon review__star-icon--active" width="22" height="21" viewBox="0 0 22 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10.0547 0.739745C10.3647 -0.158699 11.6353 -0.158697 11.9453 0.739747L13.8131 6.15312C13.9501 6.55009 14.3205 6.8192 14.7404 6.82679L20.466 6.93036C21.4162 6.94755 21.8089 8.15599 21.0502 8.72845L16.479 12.1777C16.1437 12.4306 16.0023 12.866 16.1248 13.2677L17.7956 18.7451C18.0729 19.6541 17.0449 20.401 16.2661 19.8564L11.5731 16.5747C11.2289 16.3341 10.7711 16.3341 10.4269 16.5747L5.73395 19.8564C4.95506 20.401 3.9271 19.6541 4.2044 18.7451L5.87521 13.2677C5.99773 12.866 5.85626 12.4306 5.52104 12.1777L0.9498 8.72845C0.191123 8.15599 0.583772 6.94755 1.53404 6.93036L7.25965 6.82679C7.67952 6.8192 8.04991 6.55009 8.18688 6.15312L10.0547 0.739745Z" />
                                        </svg>
                                        <svg class="review__star-icon review__star-icon--active" width="22" height="21" viewBox="0 0 22 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10.0547 0.739745C10.3647 -0.158699 11.6353 -0.158697 11.9453 0.739747L13.8131 6.15312C13.9501 6.55009 14.3205 6.8192 14.7404 6.82679L20.466 6.93036C21.4162 6.94755 21.8089 8.15599 21.0502 8.72845L16.479 12.1777C16.1437 12.4306 16.0023 12.866 16.1248 13.2677L17.7956 18.7451C18.0729 19.6541 17.0449 20.401 16.2661 19.8564L11.5731 16.5747C11.2289 16.3341 10.7711 16.3341 10.4269 16.5747L5.73395 19.8564C4.95506 20.401 3.9271 19.6541 4.2044 18.7451L5.87521 13.2677C5.99773 12.866 5.85626 12.4306 5.52104 12.1777L0.9498 8.72845C0.191123 8.15599 0.583772 6.94755 1.53404 6.93036L7.25965 6.82679C7.67952 6.8192 8.04991 6.55009 8.18688 6.15312L10.0547 0.739745Z" />
                                        </svg>
                                        <svg class="review__star-icon review__star-icon--active" width="22" height="21" viewBox="0 0 22 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10.0547 0.739745C10.3647 -0.158699 11.6353 -0.158697 11.9453 0.739747L13.8131 6.15312C13.9501 6.55009 14.3205 6.8192 14.7404 6.82679L20.466 6.93036C21.4162 6.94755 21.8089 8.15599 21.0502 8.72845L16.479 12.1777C16.1437 12.4306 16.0023 12.866 16.1248 13.2677L17.7956 18.7451C18.0729 19.6541 17.0449 20.401 16.2661 19.8564L11.5731 16.5747C11.2289 16.3341 10.7711 16.3341 10.4269 16.5747L5.73395 19.8564C4.95506 20.401 3.9271 19.6541 4.2044 18.7451L5.87521 13.2677C5.99773 12.866 5.85626 12.4306 5.52104 12.1777L0.9498 8.72845C0.191123 8.15599 0.583772 6.94755 1.53404 6.93036L7.25965 6.82679C7.67952 6.8192 8.04991 6.55009 8.18688 6.15312L10.0547 0.739745Z" />
                                        </svg>
                                    </div>
                                    <div class="review__review-count">
                                        10,231 Reviews
                                    </div>
                                </div>
                                <a href="https://google.com" target="_blank" class="button-cta">
                                    Browse all reviews
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10.0005 7.00103C9.44823 7.00103 9.00052 7.44874 9.00052 8.00103C9.00052 8.55331 9.44823 9.00103 10.0005 9.00103V7.00103ZM10.0022 8.00103L10.7092 8.70826C10.8968 8.52072 11.0022 8.26631 11.0022 8.00104C11.0022 7.73577 10.8968 7.48136 10.7092 7.29381L10.0022 8.00103ZM5.29302 11.2946C4.90243 11.685 4.90231 12.3182 5.29277 12.7088C5.68322 13.0994 6.31639 13.0995 6.70698 12.7091L5.29302 11.2946ZM6.707 3.29279C6.31642 2.90232 5.68325 2.90242 5.29279 3.293C4.90232 3.68358 4.90242 4.31675 5.293 4.70721L6.707 3.29279ZM10.0005 9.00103H10.0022V7.00103H10.0005V9.00103ZM6.70698 12.7091L10.7092 8.70826L9.29525 7.29379L5.29302 11.2946L6.70698 12.7091ZM10.7092 7.29381L6.707 3.29279L5.293 4.70721L9.29523 8.70824L10.7092 7.29381Z">
                                        </path>
                                    </svg>
                                </a>
                            </div>
                            <div class="review__rate-average-summary">
                                <div class="review__review-averages">
                                    <div class="review__review-average">
                                        <div class="review__review-average-index">
                                            5
                                        </div>
                                        <div class="review__review-average-value">
                                            <div class="review__review-average-current" style="width: 90%;"></div>
                                        </div>
                                    </div>
                                    <div class="review__review-average">
                                        <div class="review__review-average-index">
                                            4
                                        </div>
                                        <div class="review__review-average-value">
                                            <div class="review__review-average-current" style="width: 8%;"></div>
                                        </div>
                                    </div>
                                    <div class="review__review-average">
                                        <div class="review__review-average-index">
                                            3
                                        </div>
                                        <div class="review__review-average-value">
                                            <div class="review__review-average-current" style="width: 5%;"></div>
                                        </div>
                                    </div>
                                    <div class="review__review-average">
                                        <div class="review__review-average-index">
                                            2
                                        </div>
                                        <div class="review__review-average-value">
                                            <div class="review__review-average-current" style="width: 3%;"></div>
                                        </div>
                                    </div>
                                    <div class="review__review-average">
                                        <div class="review__review-average-index">
                                            1
                                        </div>
                                        <div class="review__review-average-value">
                                            <div class="review__review-average-current" style="width: 3%;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="image-with-text__image-container">
            <div class="image-with-text__image-wrapper">
                <div class="row">
                    <div class="offset-md-7 col-lg-5 col-12 g-md-0">
                        <img class="" src="<?php echo $reviews['image'] ?>" alt="Some Alt Text">
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif ?>

<?php if ($why) : ?>
    <section class="why-fa image-with-text image-with-text--image-left section--half-padding-top">
        <div class="image-with-text__image-container">
            <div class="image-with-text__image-wrapper">
                <div class="row">
                    <div class="col-lg-5 col-12 g-md-0">
                        <img class="" src="<?php echo $why['image'] ?>" alt="Some Alt Text">
                    </div>
                </div>
            </div>
        </div>
        <div class="image-with-text__text-container">
            <div class="container-fluid-lg container">
                <div class="row">
                    <div class="offset-lg-6 col-lg-6 col-12 g-md-0">
                        <div class="image-with-text__text-wrapper image-with-text__text-wrapper--large">
                            <div class="image-with-text__top-heading padding--single" id="why-fa">
                                <?php echo $why['subtitle'] ?>
                            </div>
                            <h2 class="image-with-text__heading image-with-text__heading--small padding--double">
                                <?php echo $why['title'] ?>
                            </h2>
                            <img class="image-with-text__mobile-image padding--triple" src="http://localhost/wordpress/wp-content/uploads/2022/09/most-recommend.jpg" alt="Some Alt Text">
                            <p class="padding--quadruple">
                                <?php echo $why['text'] ?>
                            </p>
                            <a href="https://google.com" target="_blank" class="button-cta">
                                <?php echo $why['cta_button'] ?>
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.0005 7.00103C9.44823 7.00103 9.00052 7.44874 9.00052 8.00103C9.00052 8.55331 9.44823 9.00103 10.0005 9.00103V7.00103ZM10.0022 8.00103L10.7092 8.70826C10.8968 8.52072 11.0022 8.26631 11.0022 8.00104C11.0022 7.73577 10.8968 7.48136 10.7092 7.29381L10.0022 8.00103ZM5.29302 11.2946C4.90243 11.685 4.90231 12.3182 5.29277 12.7088C5.68322 13.0994 6.31639 13.0995 6.70698 12.7091L5.29302 11.2946ZM6.707 3.29279C6.31642 2.90232 5.68325 2.90242 5.29279 3.293C4.90232 3.68358 4.90242 4.31675 5.293 4.70721L6.707 3.29279ZM10.0005 9.00103H10.0022V7.00103H10.0005V9.00103ZM6.70698 12.7091L10.7092 8.70826L9.29525 7.29379L5.29302 11.2946L6.70698 12.7091ZM10.7092 7.29381L6.707 3.29279L5.293 4.70721L9.29523 8.70824L10.7092 7.29381Z">
                                    </path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif ?>
<?php get_footer(); ?>