<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Flooring America</title>
    <?php wp_head() ?>
</head>

<body class="homepage" data-bs-spy="scroll" data-bs-target="#homepage-timeline">
    <header id="global-nav" class="header">
        <div class="position-relative">
            <div class="navbar navbar-expand-lg">
                <div class="container-fluid gap-1">
                    <a class=" me-auto me-lg-0 flex-shrink-1" href="#">
                        <picture>
                            <source srcset="http://localhost/wordpress/wp-content/uploads/2022/09/logo-desktop.png" media="screen and (min-width: 992px)">
                            <source srcset="http://localhost/wordpress/wp-content/uploads/2022/09/logo.png" media="screen and (max-width: 991px)">
                            <img src="http://localhost/wordpress/wp-content/uploads/2022/09/logo-desktop.png" alt="FA Logo">
                        </picture>
                    </a>
                    <ul class="navbar-nav d-none d-lg-flex align-items-center gap-2 bg-white">
                        <li class="nav-item position-relative">
                            <a class="button-cta button-cta--white button-cta--mid button-cta--rounded-square header__link dropdown-toggle" href="#" id="productsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Products
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.99989 9.99828C8.99989 9.446 8.55217 8.99828 7.99989 8.99828C7.4476 8.99828 6.99989 9.446 6.99989 9.99828L8.99989 9.99828ZM7.99989 10L7.29277 10.7071C7.68329 11.0976 8.31645 11.0976 8.70698 10.7071L7.99989 10ZM4.70712 5.2929C4.3166 4.90237 3.68343 4.90236 3.2929 5.29288C2.90237 5.6834 2.90236 6.31657 3.29288 6.7071L4.70712 5.2929ZM12.7071 6.70712C13.0976 6.3166 13.0976 5.68343 12.7071 5.2929C12.3166 4.90237 11.6834 4.90237 11.2929 5.29288L12.7071 6.70712ZM6.99989 9.99828L6.99989 10L8.99989 10L8.99989 9.99828L6.99989 9.99828ZM3.29288 6.7071L7.29277 10.7071L8.707 9.2929L4.70712 5.2929L3.29288 6.7071ZM8.70698 10.7071L12.7071 6.70712L11.2929 5.29288L7.29279 9.29288L8.70698 10.7071Z" fill="#2D2A20" />
                                </svg>

                            </a>
                            <div class="dropdown-menu header__dropdown-menu" aria-labelledby="productsDropdown">
                                <a class="header__dropdown-item" href="#">Action</a>
                                <a class="header__dropdown-item" href="#">Another action</a>
                                <a class="header__dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <li class="nav-item position-relative">
                            <a class="button-cta button-cta--white button-cta--mid button-cta--rounded-square header__link dropdown-toggle" href="#" id="inspirationDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Inspiration
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.99989 9.99828C8.99989 9.446 8.55217 8.99828 7.99989 8.99828C7.4476 8.99828 6.99989 9.446 6.99989 9.99828L8.99989 9.99828ZM7.99989 10L7.29277 10.7071C7.68329 11.0976 8.31645 11.0976 8.70698 10.7071L7.99989 10ZM4.70712 5.2929C4.3166 4.90237 3.68343 4.90236 3.2929 5.29288C2.90237 5.6834 2.90236 6.31657 3.29288 6.7071L4.70712 5.2929ZM12.7071 6.70712C13.0976 6.3166 13.0976 5.68343 12.7071 5.2929C12.3166 4.90237 11.6834 4.90237 11.2929 5.29288L12.7071 6.70712ZM6.99989 9.99828L6.99989 10L8.99989 10L8.99989 9.99828L6.99989 9.99828ZM3.29288 6.7071L7.29277 10.7071L8.707 9.2929L4.70712 5.2929L3.29288 6.7071ZM8.70698 10.7071L12.7071 6.70712L11.2929 5.29288L7.29279 9.29288L8.70698 10.7071Z" fill="#2D2A20" />
                                </svg>

                            </a>
                            <div class="dropdown-menu header__dropdown-menu" aria-labelledby="inspirationDropdown">
                                <a class="header__dropdown-item" href="#">Action</a>
                                <a class="header__dropdown-item" href="#">Another action</a>
                                <a class="header__dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <li class="nav-item position-relative">
                            <a class="button-cta button-cta--white button-cta--mid button-cta--rounded-square header__link dropdown-toggle" href="#" id="aboutDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                About
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.99989 9.99828C8.99989 9.446 8.55217 8.99828 7.99989 8.99828C7.4476 8.99828 6.99989 9.446 6.99989 9.99828L8.99989 9.99828ZM7.99989 10L7.29277 10.7071C7.68329 11.0976 8.31645 11.0976 8.70698 10.7071L7.99989 10ZM4.70712 5.2929C4.3166 4.90237 3.68343 4.90236 3.2929 5.29288C2.90237 5.6834 2.90236 6.31657 3.29288 6.7071L4.70712 5.2929ZM12.7071 6.70712C13.0976 6.3166 13.0976 5.68343 12.7071 5.2929C12.3166 4.90237 11.6834 4.90237 11.2929 5.29288L12.7071 6.70712ZM6.99989 9.99828L6.99989 10L8.99989 10L8.99989 9.99828L6.99989 9.99828ZM3.29288 6.7071L7.29277 10.7071L8.707 9.2929L4.70712 5.2929L3.29288 6.7071ZM8.70698 10.7071L12.7071 6.70712L11.2929 5.29288L7.29279 9.29288L8.70698 10.7071Z" fill="#2D2A20" />
                                </svg>

                            </a>
                            <div class="dropdown-menu header__dropdown-menu" aria-labelledby="aboutDropdown">
                                <a class="header__dropdown-item" href="#">Action</a>
                                <a class="header__dropdown-item" href="#">Another action</a>
                                <a class="header__dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="button-cta button-cta--white button-cta--mid button-cta--rounded-square header__link">Store
                                Locator</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="button-cta button-cta--white button-cta--mid button-cta--rounded-square header__link">Contact</a>
                        </li>
                    </ul>
                    <div class="header__icons-wrapper header__icons-wrapper--hidden align-items-center">
                        <div class="header__dropdown header__dropdown--search position-relative">
                            <a href="#" role="button" target="_blank" id="header-searchbar-toggle" class="dropdown-toggle header__dropdown-toggle button-cta button-cta--icon-white button-cta--short button-cta--icon button-cta--rounded-square button-cta--circular" data-bs-toggle="dropdown" aria-expanded="false">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_800_3724)">
                                        <path d="M2.30754 13.3339C3.19855 15.4304 4.88591 17.0871 6.99842 17.9396C9.11093 18.792 11.4755 18.7704 13.5721 17.8793C15.6686 16.9883 17.3253 15.301 18.1778 13.1885C19.0302 11.076 19.0085 8.71134 18.1175 6.6148C17.2265 4.51827 15.5392 2.86155 13.4267 2.00911C11.3142 1.15668 8.94953 1.17834 6.853 2.06935C4.75646 2.96036 3.09974 4.64772 2.24731 6.76023C1.39487 8.87274 1.41654 11.2374 2.30754 13.3339V13.3339Z" stroke="#2D2A20" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M16.2856 16.0474L22.9472 22.7099" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_800_3724">
                                            <rect width="24" height="24" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </a>
                            <div class="dropdown-menu header__dropdown-menu" data-bs-reference="parent">
                                <form class="header__mobile-search-form">
                                    <input aria-label="Placeholder" class="form-control general-input" id="search-main-desktop" placeholder="Start your flooring search..." type="text">
                                    <button class="button-cta button-cta--icon general-input-icon" type="submit">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_637_4385)">
                                                <path d="M1.82935 8.65609C2.3819 9.95624 3.42829 10.9836 4.73834 11.5123C6.04839 12.0409 7.51478 12.0274 8.81492 11.4749C10.1151 10.9224 11.1425 9.87596 11.6711 8.56591C12.1997 7.25586 12.1863 5.78948 11.6337 4.48933C11.0812 3.18919 10.0348 2.1618 8.72474 1.63317C7.41469 1.10454 5.9483 1.11798 4.64816 1.67053C3.34802 2.22307 2.32063 3.26947 1.792 4.57952C1.26337 5.88956 1.27681 7.35595 1.82935 8.65609V8.65609Z" stroke="#2D2A20" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M10.4977 10.3389L14.6288 14.4706" stroke="#2D2A20" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_637_4385">
                                                    <rect width="16" height="16" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </button>
                                </form>
                            </div>
                        </div>

                        <span class="header__divider d-none d-lg-inline">|</span>
                        <a href="https://google.com" target="_blank" class="button-cta button-cta--icon-white button-cta--short button-cta--icon button-cta--rounded-square button-cta--circular">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M12 18.419L5.51064 21.75L6.75 14.6948L1.5 9.69834L8.75532 8.669L12 2.25L15.2447 8.669L22.5 9.69834L17.25 14.6948L18.4894 21.75L12 18.419Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>
                        <a href="https://google.com" target="_blank" class="button-cta button-cta--icon-white button-cta--short button-cta--icon button-cta--rounded-square button-cta--circular">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M18.8082 19.6151C18.4404 19.6151 18.0832 19.7626 17.8244 20.0215C17.5657 20.2802 17.4181 20.6396 17.4181 21.0053C17.4181 21.371 17.5657 21.7302 17.8244 21.9893C18.0832 22.2479 18.4404 22.3954 18.8082 22.3954C19.174 22.3954 19.5311 22.2479 19.7899 21.9893C20.0487 21.7302 20.1984 21.371 20.1984 21.0053C20.1984 20.6396 20.0487 20.2802 19.7899 20.0215C19.5311 19.7626 19.174 19.6151 18.8082 19.6151M10.8416 19.6151C10.4738 19.6151 10.1166 19.7626 9.85783 20.0215C9.59905 20.2802 9.45148 20.6396 9.45148 21.0053C9.45148 21.371 9.59905 21.7302 9.85783 21.9893C10.1166 22.2479 10.4738 22.3954 10.8416 22.3954C11.2074 22.3954 11.5645 22.2479 11.8233 21.9893C12.0821 21.7302 12.2318 21.371 12.2318 21.0053C12.2318 20.6396 12.0821 20.2802 11.8233 20.0215C11.5645 19.7626 11.2074 19.6151 10.8416 19.6151M0.110474 5C0.110474 4.44772 0.558189 4 1.11047 4H4.35417C4.76794 4 5.13898 4.25483 5.28752 4.64102L6.28855 7.2437H22.8896C23.2082 7.2437 23.5078 7.39556 23.6962 7.65257C23.8845 7.90958 23.9391 8.24098 23.8432 8.54483L21.0629 17.3492C20.9315 17.7652 20.5456 18.048 20.1093 18.048H8.98803C8.57426 18.048 8.20322 17.7932 8.05468 17.407L4.6684 8.60268L3.66737 6H1.11047C0.558189 6 0.110474 5.55228 0.110474 5ZM7.05778 9.2437L9.67483 16.048H19.3764L21.5251 9.2437H7.05778Z" fill="black" />
                            </svg>
                        </a>
                        <span class="header__divider d-lg-none">|</span>
                    </div>
                    <button class="navbar-toggler button-cta button-cta--no-hover button-cta--icon button-cta--icon-white button-cta--circular button-cta--rounded-square button-cta--short" type="button" data-bs-toggle="collapse" data-bs-target="#headerHamburgerMenu" aria-controls="headerHamburgerMenu" aria-expanded="false" aria-label="Toggle navigation">
                        <svg class="hamburger-icon" width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_1360_14016)">
                                <line x1="11" y1="14" x2="1" y2="14" stroke-width="2" stroke-linecap="round" />
                                <line x1="15" y1="8" x2="1" y2="8" stroke-width="2" stroke-linecap="round" />
                                <line x1="7" y1="2" x2="1" y2="2" stroke-width="2" stroke-linecap="round" />
                            </g>
                            <defs>
                                <clipPath id="clip0_1360_14016">
                                    <rect width="16" height="16" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                        <svg class="close-icon d-none" width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15 15L1 0.999999" stroke-width="2" stroke-linecap="round" />
                            <path d="M15 1L1 15" stroke-width="2" stroke-linecap="round" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="header__mobile-search container-fluid">
                <form class="header__mobile-search-form">
                    <input aria-label="Placeholder" class="form-control general-input" id="search-main" placeholder="Start your flooring search..." type="text">
                    <button class="button-cta button-cta--icon general-input-icon" type="submit">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_637_4385)">
                                <path d="M1.82935 8.65609C2.3819 9.95624 3.42829 10.9836 4.73834 11.5123C6.04839 12.0409 7.51478 12.0274 8.81492 11.4749C10.1151 10.9224 11.1425 9.87596 11.6711 8.56591C12.1997 7.25586 12.1863 5.78948 11.6337 4.48933C11.0812 3.18919 10.0348 2.1618 8.72474 1.63317C7.41469 1.10454 5.9483 1.11798 4.64816 1.67053C3.34802 2.22307 2.32063 3.26947 1.792 4.57952C1.26337 5.88956 1.27681 7.35595 1.82935 8.65609V8.65609Z" stroke="#2D2A20" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M10.4977 10.3389L14.6288 14.4706" stroke="#2D2A20" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </g>
                            <defs>
                                <clipPath id="clip0_637_4385">
                                    <rect width="16" height="16" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                    </button>
                </form>
            </div>
            <div class="header__menu container-fluid collapse navbar-collapse" id="headerHamburgerMenu">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <button class="collapsed header__menu-accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#products-accordion" aria-expanded="false" aria-controls="#products-accordion" id="products-accordion-toggle">
                            Products
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.99989 9.99828C8.99989 9.446 8.55217 8.99828 7.99989 8.99828C7.4476 8.99828 6.99989 9.446 6.99989 9.99828L8.99989 9.99828ZM7.99989 10L7.29277 10.7071C7.68329 11.0976 8.31645 11.0976 8.70698 10.7071L7.99989 10ZM4.70712 5.2929C4.3166 4.90237 3.68343 4.90236 3.2929 5.29288C2.90237 5.6834 2.90236 6.31657 3.29288 6.7071L4.70712 5.2929ZM12.7071 6.70712C13.0976 6.3166 13.0976 5.68343 12.7071 5.2929C12.3166 4.90237 11.6834 4.90237 11.2929 5.29288L12.7071 6.70712ZM6.99989 9.99828L6.99989 10L8.99989 10L8.99989 9.99828L6.99989 9.99828ZM3.29288 6.7071L7.29277 10.7071L8.707 9.2929L4.70712 5.2929L3.29288 6.7071ZM8.70698 10.7071L12.7071 6.70712L11.2929 5.29288L7.29279 9.29288L8.70698 10.7071Z" fill="#2D2A20" />
                            </svg>
                        </button>
                        <div id="products-accordion" class="header__menu-accordion collapse" aria-labelledby="#products-accordion-toggle" data-bs-parent="#headerHamburgerMenu">
                            <div class="d-flex flex-column">
                                <a class="header__menu-accordion-link" href="https://google.com" target="_blank">Luxury
                                    Vinyl</a>
                                <a class="header__menu-accordion-link" href="https://google.com" target="_blank">Hardwood</a>
                                <a class="header__menu-accordion-link" href="https://google.com" target="_blank">Carpet</a>
                                <a class="header__menu-accordion-link" href="https://google.com" target="_blank">Laminate</a>
                                <a class="header__menu-accordion-link" href="https://google.com" target="_blank">Tile</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <button class="collapsed header__menu-accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#inspiration-accordion" aria-expanded="false" aria-controls="#inspiration-accordion" id="inspiration-accordion-toggle">
                            Inspiration
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.99989 9.99828C8.99989 9.446 8.55217 8.99828 7.99989 8.99828C7.4476 8.99828 6.99989 9.446 6.99989 9.99828L8.99989 9.99828ZM7.99989 10L7.29277 10.7071C7.68329 11.0976 8.31645 11.0976 8.70698 10.7071L7.99989 10ZM4.70712 5.2929C4.3166 4.90237 3.68343 4.90236 3.2929 5.29288C2.90237 5.6834 2.90236 6.31657 3.29288 6.7071L4.70712 5.2929ZM12.7071 6.70712C13.0976 6.3166 13.0976 5.68343 12.7071 5.2929C12.3166 4.90237 11.6834 4.90237 11.2929 5.29288L12.7071 6.70712ZM6.99989 9.99828L6.99989 10L8.99989 10L8.99989 9.99828L6.99989 9.99828ZM3.29288 6.7071L7.29277 10.7071L8.707 9.2929L4.70712 5.2929L3.29288 6.7071ZM8.70698 10.7071L12.7071 6.70712L11.2929 5.29288L7.29279 9.29288L8.70698 10.7071Z" fill="#2D2A20" />
                            </svg>
                        </button>
                        <div id="inspiration-accordion" class="header__menu-accordion collapse" aria-labelledby="#inspiration-accordion-toggle" data-bs-parent="#headerHamburgerMenu">
                            <div class="d-flex flex-column">
                                <a class="header__menu-accordion-link" href="https://google.com" target="_blank">Luxury
                                    Vinyl</a>
                                <a class="header__menu-accordion-link" href="https://google.com" target="_blank">Hardwood</a>
                                <a class="header__menu-accordion-link" href="https://google.com" target="_blank">Carpet</a>
                                <a class="header__menu-accordion-link" href="https://google.com" target="_blank">Laminate</a>
                                <a class="header__menu-accordion-link" href="https://google.com" target="_blank">Tile</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <button class="collapsed header__menu-accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#about-accordion" aria-expanded="false" aria-controls="#about-accordion" id="about-accordion-toggle">
                            About
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.99989 9.99828C8.99989 9.446 8.55217 8.99828 7.99989 8.99828C7.4476 8.99828 6.99989 9.446 6.99989 9.99828L8.99989 9.99828ZM7.99989 10L7.29277 10.7071C7.68329 11.0976 8.31645 11.0976 8.70698 10.7071L7.99989 10ZM4.70712 5.2929C4.3166 4.90237 3.68343 4.90236 3.2929 5.29288C2.90237 5.6834 2.90236 6.31657 3.29288 6.7071L4.70712 5.2929ZM12.7071 6.70712C13.0976 6.3166 13.0976 5.68343 12.7071 5.2929C12.3166 4.90237 11.6834 4.90237 11.2929 5.29288L12.7071 6.70712ZM6.99989 9.99828L6.99989 10L8.99989 10L8.99989 9.99828L6.99989 9.99828ZM3.29288 6.7071L7.29277 10.7071L8.707 9.2929L4.70712 5.2929L3.29288 6.7071ZM8.70698 10.7071L12.7071 6.70712L11.2929 5.29288L7.29279 9.29288L8.70698 10.7071Z" fill="#2D2A20" />
                            </svg>
                        </button>
                        <div id="about-accordion" class="header__menu-accordion collapse" aria-labelledby="#about-accordion-toggle" data-bs-parent="#headerHamburgerMenu">
                            <div class="d-flex flex-column">
                                <a class="header__menu-accordion-link" href="https://google.com" target="_blank">Luxury
                                    Vinyl</a>
                                <a class="header__menu-accordion-link" href="https://google.com" target="_blank">Hardwood</a>
                                <a class="header__menu-accordion-link" href="https://google.com" target="_blank">Carpet</a>
                                <a class="header__menu-accordion-link" href="https://google.com" target="_blank">Laminate</a>
                                <a class="header__menu-accordion-link" href="https://google.com" target="_blank">Tile</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item header__menu-link">
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="header__store-wrapper container-fluid">
            <div class="header__store-info">
                <a href="https://google.com" target="_blank" class="text-cta text-cta--no-hover">
                    Store Locator
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.0005 7.00103C9.44823 7.00103 9.00052 7.44874 9.00052 8.00103C9.00052 8.55331 9.44823 9.00103 10.0005 9.00103V7.00103ZM10.0022 8.00103L10.7092 8.70826C10.8968 8.52072 11.0022 8.26631 11.0022 8.00104C11.0022 7.73577 10.8968 7.48136 10.7092 7.29381L10.0022 8.00103ZM5.29302 11.2946C4.90243 11.685 4.90231 12.3182 5.29277 12.7088C5.68322 13.0994 6.31639 13.0995 6.70698 12.7091L5.29302 11.2946ZM6.707 3.29279C6.31642 2.90232 5.68325 2.90242 5.29279 3.293C4.90232 3.68358 4.90242 4.31675 5.293 4.70721L6.707 3.29279ZM10.0005 9.00103H10.0022V7.00103H10.0005V9.00103ZM6.70698 12.7091L10.7092 8.70826L9.29525 7.29379L5.29302 11.2946L6.70698 12.7091ZM10.7092 7.29381L6.707 3.29279L5.293 4.70721L9.29523 8.70824L10.7092 7.29381Z" />
                    </svg>
                </a>
            </div>
        </div>
    </header>