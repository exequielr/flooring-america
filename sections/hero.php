<section class="main-banner section--lightest-bg section--no-padding">
    <div class="position-relative">
        <picture>
            <source srcset="<?php echo $hero['bg_img'] ?>" media="screen and (min-width: 768px)">
            <source srcset="<?php echo $hero['bg_mobile_img'] ?>" media="screen and (max-width: 767px)">
            <img src="<?php echo $hero['bg_img'] ?>" alt="Main Banner" class="main-banner__background">
        </picture>
        <div class="main-banner__content-wrapper container">
            <div class="main-banner__title-wrapper">
                <div class="row">
                    <div class="col-12 col-xl-7 col-md-8">
                        <p class="main-banner__heading padding--quadruple">
                            <?php echo $hero['title'] ?>
                        </p>
                        <a href="<?php echo $hero['cta_link'] ?>" target="_blank" class="button-cta">
                            <?php echo $hero['cta_text'] ?>
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.0005 7.00103C9.44823 7.00103 9.00052 7.44874 9.00052 8.00103C9.00052 8.55331 9.44823 9.00103 10.0005 9.00103V7.00103ZM10.0022 8.00103L10.7092 8.70826C10.8968 8.52072 11.0022 8.26631 11.0022 8.00104C11.0022 7.73577 10.8968 7.48136 10.7092 7.29381L10.0022 8.00103ZM5.29302 11.2946C4.90243 11.685 4.90231 12.3182 5.29277 12.7088C5.68322 13.0994 6.31639 13.0995 6.70698 12.7091L5.29302 11.2946ZM6.707 3.29279C6.31642 2.90232 5.68325 2.90242 5.29279 3.293C4.90232 3.68358 4.90242 4.31675 5.293 4.70721L6.707 3.29279ZM10.0005 9.00103H10.0022V7.00103H10.0005V9.00103ZM6.70698 12.7091L10.7092 8.70826L9.29525 7.29379L5.29302 11.2946L6.70698 12.7091ZM10.7092 7.29381L6.707 3.29279L5.293 4.70721L9.29523 8.70824L10.7092 7.29381Z" />
                            </svg>

                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>