<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Paavai Tower</title>
    <link rel="icon" type="image/x-icon" href="/img/fav.png">
    <link rel="stylesheet preload" as="style" href="css/preload.min.css">
    <link rel="stylesheet preload" as="style" href="css/icomoon.css">
    <link rel="stylesheet preload" as="style" href="css/libs.min.css">
    <link rel="stylesheet" href="css/index.min.css">
    <link rel="stylesheet" href="css/floatbutton.min.css">
    <style>
        @media only screen and (max-width: 600px) {
            [class="card"] {
                margin-left: 120px;
            }
        }
    </style>
</head>

<body>
    <header class="header d-flex align-items-center" data-page="home">
        <div class="container position-relative d-flex justify-content-between align-items-center">
            <a class="brand d-flex align-items-center" href="index.php">
                <img class="lazy" data-src="img/logo.png" src="img/logo.png" alt="media" style="width: 200px;">
            </a>
            <div class="header_offcanvas offcanvas offcanvas-end" id="menuOffcanvas">
                <div class="header_offcanvas-header d-flex justify-content-between align-content-center"><a class="brand d-flex align-items-center" href="index.php">
                        <img class="lazy" data-src="img/logo.png" src="img/logo.png" alt="media" style="width: 200px;"></a><button class="close" type="button" data-bs-dismiss="offcanvas"><i class="icon-close--entypo"></i></button></div>
                <nav class="header_nav">
                    <ul class="header_nav-list">
                        <li class="header_nav-list_item">
                            <a class="nav-item" href="index.php" data-page="home">Home</a>
                        </li>
                        <li class="header_nav-list_item">
                            <a class="nav-item" href="about.php" data-page="about">About</a>
                        </li>
                        <li class="header_nav-list_item">
                            <a class="nav-item" href="rooms.php" data-page="room">Rooms</a>
                        </li>
                        <li class="header_nav-list_item">
                            <a class="nav-item" href="gallery.php" data-page="gallery">Gallery</a>
                        </li>
                        <li class="header_nav-list_item">
                            <a class="nav-item" href="contacts2.php" data-page="contact">Contact Us</a>
                        </li>
                        <li class="header_nav-list_item">
                            <a class="nav-link nav-link--contacts dropdown-toggle  align-items-center" href="https://api.whatsapp.com/send/?phone=%2B919003828304&text&type=phone_number&app_absent=0" target="_blank">
                                Chat on Whatsapp
                            </a>
                            <div class="dropdown-menu">
                            </div>
                        </li>
                    </ul>
                </nav>
                <ul class="socials d-flex align-items-center">
                    <li class="list-item"><a class="link" href="https://www.facebook.com/profile.php?id=61556385740161" target="_blank"><i class="icon-facebook"></i></a></li>
                    <li class="list-item"><a class="link" href="https://www.instagram.com/paavai_tower/" target="_blank"><i class="icon-instagram"></i></a></li>
                </ul>
            </div><button class="header_trigger d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#menuOffcanvas"><i class="icon-stream"></i></button>
        </div>
    </header>

    <main>

        <section class="hero section">
            <div class="container container--hero d-lg-flex align-items-center justify-content-between">
                <div class="hero_main">
                    <h1 class="hero_main-title" data-aos="fade-up">
                        Relax and Recharge in Our Tranquil Room Getaways
                    </h1>
                    <div class="hero_main-content d-flex"><span class="line" data-aos="fade-up" data-aos-delay="50"></span>
                        <p class="text" data-aos="fade-up" data-aos-delay="100">
                            Discover comfort in our stylish rooms. Affordable rates, prime locations, and impeccable
                            service. Your perfect stay awaits.
                            Book now for a memorable experience with us!
                        </p>
                    </div>
                </div>
                <div class="hero_media" data-aos="">
                    <picture>
                        <img class="lazy" data-src="img/index/hero.jpg" src="img/index/hero.jpg" alt="media">
                    </picture>
                </div>
            </div>
        </section>

        <section class="rooms section--blockbg section--nopb">
            <div class="block"></div>
            <div class="container">
                <div class="rooms_header d-sm-flex justify-content-between align-items-center">
                    <h2 class="rooms_header-title" data-aos="fade-right">Modern rooms</h2>
                    <div class="wrapper" data-aos="fade-left"><a class="btn theme-element theme-element--light" href="rooms.php">View all rooms</a></div>
                </div>
                <ul class="rooms_list d-md-flex flex-wrap">

                    <li class="rooms_list-item col-md-6 col-xl-4" data-order="1" data-aos="fade-up">
                        <div class="item-wrapper d-md-flex flex-column">
                            <div class="media">
                                <picture>
                                    <img class="lazy" data-src="img/rooms/02.jpg" src="img/rooms/02.jpg" alt="media">
                                </picture>
                            </div>
                            <div class="main d-md-flex flex-column justify-content-between flex-grow-1">
                                <a class="main_title h4" href="javascript:void(0)" data-shave="true">Standard AC</a>
                                <div class="main_amenities">
                                    <span class="main_amenities-item d-inline-flex align-items-center">
                                        <i class="icon-user icon"></i> 2 Sleeps
                                    </span><br>
                                    <span class="main_amenities-item d-inline-flex align-items-center">
                                        <i class="icon-twin_bed icon"></i>1 Bed
                                    </span><br>
                                </div>
                                <a class="link link--arrow d-inline-flex align-items-center" href="rooms.php">See
                                    availability
                                    <i class="icon-arrow_right icon"></i>
                                </a>
                            </div>
                        </div>
                    </li>

                    <li class="rooms_list-item col-md-6 col-xl-4" data-order="2" data-aos="fade-up" data-aos-delay="50">
                        <div class="item-wrapper d-md-flex flex-column">
                            <div class="media">
                                <picture>
                                    <img class="lazy" data-src="img/rooms/03.jpg" src="img/rooms/03.jpg" alt="media">
                                </picture>
                                <!-- <span class="media_label media_label--pricing"><span
                                        class="price h4">$35</span> / 1 night</span> -->
                            </div>
                            <div class="main d-md-flex flex-column justify-content-between flex-grow-1">
                                <a class="main_title h4" href="javascript:void(0)" data-shave="true">Deluxe AC</a>
                                <div class="main_amenities">
                                    <span class="main_amenities-item d-inline-flex align-items-center">
                                        <i class="icon-user icon"></i> 2 Sleeps
                                    </span><br>
                                    <span class="main_amenities-item d-inline-flex align-items-center">
                                        <i class="icon-twin_bed icon"></i> 1 Bed
                                    </span><br>
                                </div>
                                <a class="link link--arrow d-inline-flex align-items-center" href="rooms.php">See
                                    availability
                                    <i class="icon-arrow_right icon"></i>
                                </a>
                            </div>
                        </div>
                    </li>

                    <li class="rooms_list-item col-md-6 col-xl-4" data-order="3" data-aos="fade-up" data-aos-delay="100">
                        <div class="card accent">
                            <h3 class="title">Charming Spaces, Better Rates</h3>
                            <p class="text">Experience bliss in our charming spaces with budget-conscious rates.</p>
                            <div class="content">
                                <p class="text">Cool vibes in our Classic AC rooms – where relaxation meets style.</p>
                                <p class="text">Affordable group rooms for shared laughter and unforgettable moments.
                                </p>
                            </div><a class="btn theme-element theme-element--light" href="rooms.php">Choose room</a>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

        <section class="about section">
            <div class="container container--about d-xl-flex align-items-center">
                <div class="about_main">
                    <h2 class="about_main-header" data-aos="fade-up">We have everything you need</h2>
                    <p class="about_main-text" data-aos="fade-up">
                        Enjoy the perfect blend of comfort and affordability. Our well-appointed rooms offer everything
                        you desire for an unforgettable stay.
                    </p>
                    <ul class="about_main-list d-sm-flex flex-wrap">
                        <li class="about_main-list_item d-flex flex-column flex-sm-row align-items-center" data-aos="fade-up" data-order="1"><span class="icon"><svg width="60" height="60" viewbox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5 18.8178L6.08615 20C20.1515 8.74369 40.8485 8.74369 54.9138 20L56 18.8178C41.3088 7.06075 19.6912 7.06075 5 18.8178Z" fill="currentColor"></path>
                                    <path d="M11 27.8499L12.212 29C22.595 19.1685 39.4049 19.1685 49.788 29L51 27.8499C39.9476 17.3834 22.0525 17.3834 11 27.8499Z" fill="currentColor"></path>
                                    <path d="M18 36.5799L19.263 38C25.1969 31.3432 34.8031 31.3432 40.737 38L42 36.5799C35.3681 29.14 24.6319 29.14 18 36.5799Z" fill="currentColor"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M27.3176 43.3159C29.0767 41.5614 31.9234 41.5614 33.6824 43.3159C35.4392 45.0737 35.4392 47.9232 33.6824 49.6812C31.9253 51.4393 29.076 51.4396 27.3184 49.682C25.5608 47.9243 25.5605 45.0741 27.3176 43.3159ZM28.5906 48.4085C29.645 49.4633 31.3553 49.4639 32.4105 48.4098C33.4632 47.354 33.4632 45.646 32.4105 44.5902C31.3558 43.5366 29.6465 43.5366 28.5918 44.5902C27.5366 45.6442 27.536 47.3537 28.5906 48.4085Z" fill="currentColor"></path>
                                </svg></span>
                            <p class="text">Free available high speed WiFi</p>
                        </li>
                        <li class="about_main-list_item d-flex flex-column flex-sm-row align-items-center" data-order="2" data-aos="fade-up" data-aos-delay="50"><span class="icon"><svg width="60" height="60" viewbox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13 21.6667C13 12.4769 20.8507 5 30.5 5C40.1493 5 48 12.4769 48 21.6666C48 24.4254 47.2758 27.1608 45.9043 29.5788L31.457 54.4629C31.2647 54.7945 30.8984 55 30.5 55C30.1016 55 29.7353 54.7945 29.543 54.4629L15.101 29.587C13.7242 27.1608 13 24.4255 13 21.6667ZM30.5 51.8059L43.9849 28.5789C45.1791 26.4742 45.8124 24.0806 45.8124 21.6667C45.8124 13.6254 38.9434 7.0834 30.5 7.0834C22.0566 7.0834 15.1876 13.6253 15.1876 21.6667C15.1876 24.0807 15.8209 26.4742 17.0204 28.5881L30.5 51.8059Z" fill="currentColor"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M22 21.1764C22 16.5815 25.8132 12.8431 30.5 12.8431C35.1868 12.8431 39 16.5816 39 21.1765C39 25.7714 35.1868 29.5098 30.5 29.5098C25.8132 29.5098 22 25.7714 22 21.1764ZM24.125 21.1765C24.125 24.623 26.9846 27.4265 30.5 27.4265C34.0154 27.4265 36.875 24.6229 36.875 21.1765C36.875 17.73 34.0154 14.9265 30.5 14.9265C26.9846 14.9265 24.125 17.73 24.125 21.1765Z" fill="currentColor"></path>
                                </svg></span>
                            <p class="text">Сonvenient location in the center</p>
                        </li>
                        <li class="about_main-list_item d-flex flex-column flex-sm-row align-items-center" data-order="3" data-aos="fade-up" data-aos-delay="100">
                            <span class="icon">
                                <svg width="60" height="60" viewbox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M51.0582 15.7004H39.1938V13.5973C39.1941 12.907 38.9272 12.2452 38.4523 11.7585C37.9846 11.2768 37.3517 11.0043 36.6905 11H23.3095C22.6661 11.0003 22.0473 11.2554 21.5812 11.7125L21.531 11.7643C21.0561 12.251 20.7892 12.9128 20.7895 13.6031V15.7004H8.94179C6.7674 15.7068 5.00613 17.522 5 19.763V44.9374C5.00613 47.1784 6.7674 48.9937 8.94179 49V48.9943H51.0582C53.2305 48.9879 54.9908 47.1763 55 44.9374V19.763C54.9939 17.522 53.2326 15.7068 51.0582 15.7004ZM22.4286 13.5973C22.4296 13.3509 22.5259 13.1152 22.6963 12.9422L22.7241 12.9135C22.8846 12.7628 23.0925 12.677 23.3095 12.6722H36.6905C36.9287 12.6717 37.1574 12.7688 37.326 12.9422C37.4964 13.1152 37.5927 13.3509 37.5937 13.5973V15.6947H22.4286V13.5973ZM8.94179 47.3221H11.5065V17.3554H8.94179C7.65681 17.3617 6.61937 18.4387 6.62244 19.763V44.9374C6.63163 46.2527 7.66559 47.3158 8.94179 47.3221ZM16.3403 47.3221H13.1289L13.1345 35.7549H16.3403V47.3221ZM13.1289 34.031H16.3403V30.5832H13.1345L13.1289 34.031ZM16.3403 28.9341H13.1289L13.1345 17.3669H16.3403V28.9341ZM17.9628 47.3221H42.0372V17.3669H17.9683L17.9628 47.3221ZM46.8711 47.3221H43.6597V35.7434H46.8711V47.3221ZM43.6597 34.0195H46.8711V30.5718H43.6597V34.0195ZM46.8711 28.9341H43.6597V17.3554H46.8711V28.9341ZM51.0582 47.3278C52.3366 47.3215 53.3714 46.255 53.3776 44.9374V19.7458C53.3714 18.4282 52.3366 17.3617 51.0582 17.3554H48.4935V47.3278H51.0582Z" fill="currentColor">
                                    </path>
                                </svg>
                            </span>
                            <p class="text">Free storage of luggage of any size</p>
                        </li>
                        <!-- <li class="about_main-list_item d-flex flex-column flex-sm-row align-items-center" data-order="4" data-aos="fade-up" data-aos-delay="150">
                            <span class="icon">
                                <svg width="60" height="60" viewbox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M24.1777 18.2559C23.7953 17.8906 23.2868 17.6868 22.7579 17.6868C22.2291 17.6868 21.7205 17.8906 21.3381 18.2559L19.5669 20.0271C18.5141 20.2346 16.506 19.12 14.6919 17.3084C12.8803 15.4956 11.7676 13.4863 11.9719 12.4322L13.7431 10.66C14.1188 10.2831 14.3298 9.77268 14.3298 9.24054C14.3298 8.70839 14.1188 8.19794 13.7431 7.82104L11.8457 5.92324C11.4684 5.54793 10.9579 5.33729 10.4258 5.3374C9.89361 5.33751 9.38317 5.54837 9.00608 5.92384L7.10861 7.8213C3.36321 11.5674 6.08195 17.6976 10.1929 21.808C12.9337 24.548 16.5711 26.6693 19.8011 26.6693C20.6132 26.6852 21.42 26.5357 22.1724 26.2299C22.9248 25.924 23.6071 25.4682 24.1777 24.8903L26.0751 22.9934C26.4517 22.6167 26.6632 22.106 26.6632 21.5734C26.6632 21.0408 26.4517 20.53 26.0751 20.1534L24.1777 18.2559ZM25.1329 22.0508L23.2355 23.9482C21.5242 25.6595 19.248 25.4624 17.6382 24.9952C15.1658 24.1705 12.933 22.7528 11.1351 20.8658C9.24779 19.0675 7.8296 16.8343 7.00455 14.3614C6.53601 12.7536 6.33788 10.4768 8.05081 8.7635L9.94828 6.8667C10.075 6.74014 10.2467 6.66901 10.4258 6.66889C10.6048 6.66878 10.7766 6.7397 10.9035 6.8661L12.8009 8.7635C12.9272 8.89026 12.9981 9.06189 12.9981 9.2408C12.9981 9.41972 12.9272 9.59134 12.8009 9.7181L10.9035 11.6155C10.8302 11.6885 10.775 11.7775 10.7421 11.8755C10.1213 13.7378 11.8888 16.3894 13.7497 18.2504C15.6119 20.1104 18.2642 21.8735 20.1226 21.256C20.2206 21.2232 20.3096 21.1682 20.3826 21.0952L22.28 19.1985C22.4085 19.0753 22.5795 19.0065 22.7575 19.0064C22.9355 19.0062 23.1066 19.0748 23.2353 19.1978L25.1329 21.0962C25.1956 21.1588 25.2453 21.2332 25.2793 21.3151C25.3132 21.397 25.3307 21.4848 25.3307 21.5735C25.3307 21.6621 25.3132 21.7499 25.2793 21.8318C25.2453 21.9137 25.1956 21.9881 25.1329 22.0508Z" fill="currentColor">
                                    </path>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M18.0012 14.664H20.6665C20.7546 14.6649 20.8419 14.6483 20.9235 14.6152C21.0051 14.5821 21.0794 14.5332 21.142 14.4712C21.2045 14.4092 21.2542 14.3355 21.2881 14.2542C21.322 14.1729 21.3395 14.0858 21.3395 13.9977C21.3395 13.9096 21.322 13.8224 21.2881 13.7412C21.2542 13.6599 21.2045 13.5861 21.142 13.5242C21.0794 13.4622 21.0051 13.4133 20.9235 13.3802C20.8419 13.3471 20.7546 13.3305 20.6665 13.3314H18.6676V11.9987H20.6665C20.7541 11.9988 20.8408 11.9816 20.9217 11.9482C21.0027 11.9147 21.0762 11.8656 21.1381 11.8037C21.2 11.7417 21.2491 11.6682 21.2826 11.5873C21.3161 11.5064 21.3333 11.4196 21.3332 11.3321V8.66719C21.3332 8.57964 21.316 8.49294 21.2825 8.41205C21.249 8.33117 21.1999 8.25767 21.138 8.19578C21.0761 8.13389 21.0026 8.08482 20.9217 8.05137C20.8407 8.01793 20.754 8.00076 20.6665 8.00085H18.0012C17.8257 8.00261 17.6579 8.07358 17.5344 8.19835C17.4109 8.32311 17.3416 8.49159 17.3416 8.66715C17.3416 8.84272 17.4109 9.0112 17.5344 9.13596C17.6579 9.26073 17.8257 9.3317 18.0012 9.33346H20.0002V10.6661H18.0012C17.9137 10.6661 17.8271 10.6833 17.7462 10.7167C17.6653 10.7502 17.5919 10.7993 17.53 10.8611C17.4681 10.923 17.419 10.9965 17.3856 11.0774C17.3521 11.1582 17.3349 11.2449 17.335 11.3324V13.9977C17.3349 14.0852 17.3521 14.1718 17.3856 14.2527C17.419 14.3336 17.4681 14.407 17.53 14.4689C17.5919 14.5308 17.6653 14.5799 17.7462 14.6134C17.827 14.6468 17.9137 14.664 18.0012 14.664Z" fill="currentColor">
                                    </path>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M25.9966 8.00085C25.9091 8.0008 25.8224 8.018 25.7416 8.05147C25.6607 8.08494 25.5872 8.13402 25.5254 8.1959C25.4635 8.25779 25.4144 8.33126 25.3809 8.41213C25.3475 8.493 25.3303 8.57967 25.3303 8.66719V10.6661H23.9977V8.66719C23.9922 8.49411 23.9196 8.32996 23.7953 8.20947C23.6709 8.08898 23.5045 8.0216 23.3314 8.0216C23.1582 8.0216 22.9918 8.08898 22.8675 8.20947C22.7431 8.32996 22.6705 8.49411 22.665 8.66719V11.3324C22.6649 11.4199 22.6821 11.5066 22.7156 11.5875C22.749 11.6685 22.7981 11.742 22.86 11.8039C22.9219 11.8658 22.9953 11.9149 23.0762 11.9484C23.1571 11.9819 23.2438 11.9991 23.3314 11.9991H25.3303V13.998C25.3358 14.1711 25.4084 14.3352 25.5327 14.4557C25.6571 14.5762 25.8235 14.6436 25.9966 14.6436C26.1698 14.6436 26.3362 14.5762 26.4605 14.4557C26.5849 14.3352 26.6575 14.1711 26.663 13.998V8.66719C26.663 8.57967 26.6458 8.493 26.6124 8.41213C26.5789 8.33126 26.5298 8.25779 26.4679 8.1959C26.406 8.13402 26.3326 8.08494 26.2517 8.05147C26.1708 8.018 26.0842 8.0008 25.9966 8.00085Z" fill="currentColor">
                                    </path>
                                </svg>
                            </span>
                            <p class="text">Parking place allocated to you</p>
                        </li> -->
                    </ul>
                    <div class="about_main-action d-flex flex-column-reverse flex-sm-row align-items-center">
                        <div class="wrapper" data-aos="fade-left">
                            <a class="about_main-action_item btn theme-element theme-element--accent" href="rooms.php">Book now
                            </a>
                        </div>
                        <div class="wrapper" data-aos="fade-left" data-aos-delay="50">
                            <a class="about_main-action_item link link--arrow" href="about.php">More about
                                <i class="icon-arrow_right icon"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="about_media" data-aos="zoom-in">
                    <picture>
                        <img class="lazy" style="object-fit: contain;" data-src="img/index/about.jpg" src="img/index/about.jpg" alt="media">
                    </picture>
                </div>
            </div>
        </section>

        <div class="rating">
            <div class="container">
                <ul class="rating_list d-flex flex-wrap">
                    <li class="rating_list-item col-12 col-sm-6 col-xl-3" data-order="1" data-aos="zoom-in">
                        <div class="main d-flex flex-column">
                            <span class="main_rating">
                                <span class="level h2">3.0</span>
                                <sup class="h4">/5</sup>
                            </span>
                        </div>
                        <div class="media">
                            <img src="img/icon/agoda.svg" class="card" style="width: 120px;">
                        </div>
                    </li>
                    <li class="rating_list-item col-12 col-sm-6 col-xl-3" data-order="2" data-aos="zoom-in">
                        <div class="main d-flex flex-column">
                            <span class="main_rating">
                                <span class="level h2">3.5</span>
                                <sup class="h4">/5</sup>
                            </span>
                        </div>
                        <div class="media">
                            <img src="img/icon/goibibo.svg" class="card" style="width: 150px;">
                        </div>
                    </li>
                    <li class="rating_list-item col-12 col-sm-6 col-xl-3" data-order="3" data-aos="zoom-in">
                        <div class="main d-flex flex-column">
                            <span class="main_rating">
                                <span class="level h2">3.8</span>
                                <sup class="h4">/5</sup>
                            </span>
                        </div>
                        <div class="media">
                            <img src="img/icon/google.svg" class="card" style="width: 150px;">
                        </div>
                    </li>
                    <li class="rating_list-item col-12 col-sm-6 col-xl-3" data-order="4" data-aos="zoom-in">
                        <div class="main d-flex flex-column">
                            <span class="main_rating">
                                <span class="level h2">3.7</span>
                                <sup class="h4">/5</sup>
                            </span>
                        </div>
                        <div class="media">
                            <img src="img/icon/makemytrip.svg" class="card" style="width: 190px;">
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <section class="promo section">
            <div class="container">
                <div class="container d-xl-flex align-items-center justify-content-between">
                    <div class="promo_info">
                        <h2 class="info_header" data-aos="fade-up">Find suitable budget accommodation</h2>
                        <p class="info_text" data-aos="fade-up" data-aos-delay="50">
                            Book budget rooms in Trichy for a wallet-friendly and comfortable stay. Discover the perfect
                            accommodation for your travel needs.
                        </p>
                        <ul class="info_list">
                            <li class="list-item d-flex align-items-sm-center" data-aos="fade-up">
                                <div class="media theme-element theme-element--accent"><svg width="40" height="38" viewbox="0 0 40 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9.14272 37.5001H30.857C31.1726 37.5001 31.4284 37.2495 31.4284 36.9404V3.35829C31.4284 3.04917 31.1726 2.79858 30.857 2.79858H9.14272C8.82713 2.79858 8.57129 3.04917 8.57129 3.35829V36.9404C8.57129 37.2495 8.82713 37.5001 9.14272 37.5001ZM30.2856 36.3807H9.71415V3.91799H30.2856V36.3807Z" fill="currentColor"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M13.7145 3.91791H26.2859C26.6015 3.91791 26.8574 3.66732 26.8574 3.35821V0.559702C26.8574 0.250587 26.6015 0 26.2859 0H13.7145C13.3989 0 13.1431 0.250587 13.1431 0.559702V3.35821C13.1431 3.66732 13.3989 3.91791 13.7145 3.91791ZM25.7145 2.79851H14.2859V1.1194H25.7145V2.79851Z" fill="currentColor"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M30.8571 37.5H39.4285C39.7441 37.5 39.9999 37.2494 39.9999 36.9403V10.0746C39.9999 9.76548 39.7441 9.51489 39.4285 9.51489H30.8571C30.5415 9.51489 30.2856 9.76548 30.2856 10.0746V36.9403C30.2856 37.2494 30.5415 37.5 30.8571 37.5ZM38.8571 36.3806H31.4285V10.6343H38.8571V36.3806Z" fill="currentColor"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.571429 37.5H9.14286C9.45845 37.5 9.71429 37.2494 9.71429 36.9403V10.0746C9.71429 9.76548 9.45845 9.51489 9.14286 9.51489H0.571429C0.255837 9.51489 0 9.76548 0 10.0746V36.9403C0 37.2494 0.255837 37.5 0.571429 37.5ZM8.57143 36.3806H1.14286V10.6343H8.57143V36.3806Z" fill="currentColor"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M23.4285 11.3338H25.8571C26.4883 11.3338 26.9999 10.8327 26.9999 10.2144V7.83571C26.9999 7.21748 26.4883 6.71631 25.8571 6.71631H23.4285C22.7973 6.71631 22.2856 7.21748 22.2856 7.83571V10.2144C22.2856 10.8327 22.7973 11.3338 23.4285 11.3338ZM23.4285 10.2144V7.83571H25.8571V10.2144H23.4285Z" fill="currentColor"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M14.1429 11.3338H16.5714C17.2026 11.3338 17.7143 10.8327 17.7143 10.2144V7.83571C17.7143 7.21748 17.2026 6.71631 16.5714 6.71631H14.1429C13.5117 6.71631 13 7.21748 13 7.83571V10.2144C13 10.8327 13.5117 11.3338 14.1429 11.3338ZM14.1429 7.83571H16.5714V10.2144H14.1429V7.83571Z" fill="currentColor"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M23.4285 18.2604H25.8571C26.4883 18.2604 26.9999 17.7592 26.9999 17.141V14.7622C26.9999 14.144 26.4883 13.6428 25.8571 13.6428H23.4285C22.7973 13.6428 22.2856 14.144 22.2856 14.7622V17.141C22.2856 17.7592 22.7973 18.2604 23.4285 18.2604ZM23.4285 17.141V14.7622H25.8571V17.141H23.4285Z" fill="currentColor"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M14.1429 18.2604H16.5714C17.2026 18.2604 17.7143 17.7592 17.7143 17.141V14.7622C17.7143 14.144 17.2026 13.6428 16.5714 13.6428H14.1429C13.5117 13.6428 13 14.144 13 14.7622V17.141C13 17.7592 13.5117 18.2604 14.1429 18.2604ZM14.1429 14.7617H16.5714V17.1404H14.1429V14.7617Z" fill="currentColor"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M23.4285 25.1866H25.8571C26.4883 25.1866 26.9999 24.6855 26.9999 24.0672V21.6885C26.9999 21.0703 26.4883 20.5691 25.8571 20.5691H23.4285C22.7973 20.5691 22.2856 21.0703 22.2856 21.6885V24.0672C22.2856 24.6855 22.7973 25.1866 23.4285 25.1866ZM23.4285 24.0672V21.6885H25.8571V24.0672H23.4285Z" fill="currentColor"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M14.1429 25.1866H16.5714C17.2026 25.1866 17.7143 24.6855 17.7143 24.0672V21.6885C17.7143 21.0703 17.2026 20.5691 16.5714 20.5691H14.1429C13.5117 20.5691 13 21.0703 13 21.6885V24.0672C13 24.6855 13.5117 25.1866 14.1429 25.1866ZM14.1429 21.6879H16.5714V24.0672H14.1429V21.6879Z" fill="currentColor"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16.4528 37.4999H23.5476C23.8632 37.4999 24.1191 37.2493 24.1191 36.9402V27.985C24.1191 27.6759 23.8632 27.4253 23.5476 27.4253H16.4528C16.1372 27.4253 15.8813 27.6759 15.8813 27.985V36.9402C15.8813 37.2493 16.1372 37.4999 16.4528 37.4999ZM22.9762 36.3805H17.0242V28.5447H22.9762V36.3805Z" fill="currentColor"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M34.2503 18.4701H36.0354C36.6666 18.4701 37.1783 17.9689 37.1783 17.3506V15.6016C37.1783 14.9834 36.6666 14.4822 36.0354 14.4822H34.2503C33.6191 14.4822 33.1074 14.9834 33.1074 15.6016V17.3506C33.1074 17.9689 33.6191 18.4701 34.2503 18.4701ZM34.2503 17.3506V15.6016H36.0354V17.3506H34.2503Z" fill="currentColor"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M34.2503 25.5012H36.0354C36.6666 25.5012 37.1783 25.0001 37.1783 24.3818V22.6333C37.1783 22.0151 36.6666 21.5139 36.0354 21.5139H34.2503C33.6191 21.5139 33.1074 22.0151 33.1074 22.6333V24.3818C33.1074 25.0001 33.6191 25.5012 34.2503 25.5012ZM34.2503 24.3818V22.6333H36.0354V24.3818H34.2503Z" fill="currentColor"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M34.2503 32.5326H36.0354C36.6666 32.5326 37.1783 32.0314 37.1783 31.4131V29.6641C37.1783 29.0459 36.6666 28.5447 36.0354 28.5447H34.2503C33.6191 28.5447 33.1074 29.0459 33.1074 29.6641V31.4131C33.1074 32.0314 33.6191 32.5326 34.2503 32.5326ZM34.2503 31.4131V29.6641H36.0354V31.4131H34.2503Z" fill="currentColor"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M3.96463 18.4701H5.74978C6.38096 18.4701 6.89263 17.9689 6.89263 17.3506V15.6016C6.89263 14.9834 6.38096 14.4822 5.74978 14.4822H3.96463C3.33345 14.4822 2.82178 14.9834 2.82178 15.6016V17.3506C2.82178 17.9689 3.33345 18.4701 3.96463 18.4701ZM3.96463 17.3506V15.6016H5.74978V17.3506H3.96463Z" fill="currentColor"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M3.96463 25.5012H5.74978C6.38096 25.5012 6.89263 25.0001 6.89263 24.3818V22.6333C6.89263 22.0151 6.38096 21.5139 5.74978 21.5139H3.96463C3.33345 21.5139 2.82178 22.0151 2.82178 22.6333V24.3818C2.82178 25.0001 3.33345 25.5012 3.96463 25.5012ZM3.96463 24.3818V22.6333H5.74978V24.3818H3.96463Z" fill="currentColor"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M3.96463 32.5326H5.74978C6.38096 32.5326 6.89263 32.0314 6.89263 31.4131V29.6641C6.89263 29.0459 6.38096 28.5447 5.74978 28.5447H3.96463C3.33345 28.5447 2.82178 29.0459 2.82178 29.6641V31.4131C2.82178 32.0314 3.33345 32.5326 3.96463 32.5326ZM3.96463 31.4131V29.6641H5.74978V31.4131H3.96463Z" fill="currentColor"></path>
                                    </svg></div>
                                <div class="main">
                                    <h4 class="main_title">Our territory</h4>
                                    <p class="main_text">Cherish moments in our territory's embrace</p>
                                </div>
                            </li>
                            <li class="list-item d-flex align-items-sm-center" data-aos="fade-up" data-aos-delay="50">
                                <div class="media theme-element theme-element--accent"><svg width="40" height="40" viewbox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M35.5133 23.6979L35.3079 23.8084C34.4779 22.8045 33.0399 22.4154 31.9444 22.9688L31.9327 22.9748L31.4477 23.2351C30.2625 22.2348 28.5752 22.0828 27.2293 22.8552L24.6173 24.2712H21.1416C20.389 24.2702 19.6463 24.1006 18.9683 23.7748L18.4902 23.5443C15.7145 22.1981 12.4156 22.5193 9.95364 24.3753C9.94229 24.384 9.9312 24.3926 9.92064 24.4024L8.76626 25.4267C8.33 25.8129 7.81433 26.0994 7.25535 26.2662L6.59973 24.121C6.53304 23.903 6.33126 23.754 6.10262 23.754H0.519728C0.370932 23.754 0.229272 23.8176 0.130628 23.9286C0.0319839 24.0397 -0.0141828 24.1875 0.00382146 24.3348L1.86476 39.5445C1.89654 39.8045 2.11795 39.9999 2.38066 39.9999H10.7545C10.9192 39.9999 11.0742 39.9221 11.1722 39.7901C11.2702 39.6582 11.2997 39.4878 11.2516 39.3307L10.1516 35.7326L13.5777 33.5741C14.0361 33.3212 14.574 33.2519 15.0819 33.3801C15.0926 33.3827 15.1034 33.3852 15.1143 33.3871L22.0837 34.6663C23.9777 35.0041 25.9304 34.7293 27.6565 33.882C27.6786 33.8711 27.6998 33.8587 27.7201 33.8448L39.7744 25.5948C40.0011 25.4397 40.0673 25.1354 39.9255 24.9005C39.0143 23.3878 37.07 22.8579 35.5133 23.6979ZM32.4195 23.8903C33.0532 23.574 33.8508 23.8333 34.3603 24.3179L29.7893 26.776L29.5207 26.917C29.376 26.5074 29.1645 26.1243 28.8946 25.7833L32.4195 23.8903ZM27.7367 23.7596L27.7323 23.7621L26.6244 24.3616C27.1603 24.4784 27.6659 24.7052 28.1089 25.0276L30.433 23.7803C29.6084 23.2843 28.5784 23.2746 27.7446 23.7551C27.7422 23.7566 27.7395 23.7581 27.7367 23.7596ZM2.84044 38.9638L1.10675 24.7901H5.71742L10.0527 38.9638H2.84044ZM22.2696 33.6467C23.9312 33.9427 25.6442 33.7055 27.1618 32.9691L38.7394 25.0459C38.0331 24.3001 36.9119 24.1209 36.0071 24.6093L30.2773 27.6896L29.7349 27.9745C29.7401 28.0572 29.7436 28.1402 29.7436 28.2241C29.7436 28.5102 29.5109 28.7421 29.2239 28.7421C29.2161 28.7421 29.2082 28.7416 29.2003 28.7416L25.2456 28.5633C24.0873 28.5112 22.9267 28.5646 21.7782 28.7228C21.4954 28.7591 21.2362 28.5615 21.1971 28.2801C21.158 27.9986 21.3536 27.7383 21.6356 27.6966C22.8469 27.5298 24.071 27.4734 25.2927 27.5282L28.6531 27.6797C28.389 26.3038 27.1827 25.3082 25.7773 25.3062H21.141C20.2317 25.305 19.3343 25.1 18.5151 24.7065L18.0371 24.4759C15.6185 23.3029 12.7447 23.5785 10.5949 25.1895L9.45679 26.1997C8.90867 26.6858 8.26081 27.047 7.55835 27.258L9.83644 34.705L13.034 32.69C13.0419 32.685 13.0499 32.6802 13.058 32.6758C13.7449 32.2915 14.5528 32.1824 15.3175 32.3706L22.2696 33.6467Z" fill="currentColor"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.62732 38.125H5.99768C6.48221 38.125 6.875 37.7323 6.875 37.2478V35.8772C6.875 35.3927 6.48221 35 5.99768 35H4.62732C4.14279 35 3.75 35.3927 3.75 35.8772V37.2478C3.75 37.7323 4.14279 38.125 4.62732 38.125ZM4.79167 37.0833V36.0417H5.83333V37.0833H4.79167Z" fill="currentColor"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M24.0862 3.88411V5.57826C24.0762 7.72633 22.346 9.46237 20.2152 9.46237C18.0844 9.46237 16.3542 7.72633 16.3442 5.57826V3.88411C16.3542 1.73604 18.0844 0 20.2152 0C22.346 0 24.0762 1.73604 24.0862 3.88411ZM17.3642 3.88411V5.57826C17.3727 7.15948 18.6467 8.43675 20.2152 8.43675C21.7837 8.43675 23.0577 7.15948 23.0662 5.57826V3.88411C23.0577 2.30289 21.7837 1.02562 20.2152 1.02562C18.6467 1.02562 17.3727 2.30289 17.3642 3.88411Z" fill="currentColor"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M26.3728 20.2152H13.6411C13.3538 20.2152 13.1208 19.9855 13.1208 19.7022V18.5249H4.39139C4.10404 18.5249 3.87109 18.2952 3.87109 18.0119V14.6826C3.8714 12.5984 5.55676 10.8943 7.67017 10.8413C7.83973 10.8373 8.00063 10.9149 8.10158 11.0493C8.53964 11.6329 9.22637 11.9846 9.96259 12.0023C10.6988 12.02 11.4021 11.7018 11.8686 11.14L11.8689 11.1396C11.9844 11.0006 12.1281 10.8277 12.4044 10.8478C13.0322 10.8859 13.6411 11.0743 14.1783 11.3968C14.2391 11.3271 14.3015 11.2584 14.3672 11.1922C15.1627 10.3854 16.2478 9.91877 17.3888 9.89276C17.5584 9.88832 17.7195 9.96597 17.8202 10.1007C18.3342 10.7856 19.1401 11.1984 20.004 11.2192C20.868 11.24 21.6934 10.8665 22.2407 10.2071C22.3724 10.0495 22.5084 9.88857 22.7772 9.89934C23.9575 9.96963 25.0586 10.5081 25.8296 11.3919C26.4076 11.0462 27.0676 10.8564 27.7434 10.8414C27.913 10.8373 28.0741 10.9149 28.1749 11.0494C28.6129 11.6331 29.2997 11.9847 30.0359 12.0025C30.7722 12.0202 31.4755 11.702 31.9419 11.1401L31.9436 11.1382C32.059 10.9994 32.2016 10.8279 32.4778 10.8479C34.5301 10.9771 36.128 12.6552 36.1292 14.6826V18.0119C36.1292 18.2952 35.8962 18.5249 35.6089 18.5249H26.8931V19.7022C26.8931 19.9855 26.6602 20.2152 26.3728 20.2152ZM30.085 13.0292C29.1035 13.0267 28.1701 12.6096 27.5213 11.8835C27.1301 11.926 26.7523 12.0489 26.4123 12.2444C26.7288 12.852 26.8937 13.5254 26.8931 14.2084V17.499H35.0886V14.6826C35.0873 13.2886 34.053 12.1048 32.6548 11.8968C32.0021 12.6195 31.0666 13.0318 30.085 13.0292ZM17.1645 10.9342C17.8924 11.7649 18.95 12.2436 20.0635 12.2462C21.177 12.2488 22.2369 11.7751 22.9687 10.9478C24.6207 11.173 25.8513 12.5644 25.8529 14.2084V19.1893H14.1614V14.2084C14.1721 12.5229 15.4645 11.1138 17.1645 10.9342ZM4.91168 14.6826V17.499H13.1208V14.2084C13.1199 13.5277 13.2829 12.8565 13.5966 12.25C13.2841 12.0695 12.9394 11.9496 12.5812 11.8968C11.9286 12.6193 10.9932 13.0316 10.0119 13.0291C9.03053 13.0266 8.0973 12.6097 7.44844 11.8839C6.00814 12.053 4.92077 13.2527 4.91168 14.6826Z" fill="currentColor"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M33.5482 5.69622V7.2072C33.5482 9.16537 32.0077 10.7528 30.1074 10.7528C28.207 10.7528 26.6665 9.16537 26.6665 7.2072V5.69622C26.6665 3.73805 28.207 2.15063 30.1074 2.15063C32.0077 2.15063 33.5482 3.73805 33.5482 5.69622ZM27.6832 5.69622V7.2072C27.6832 8.58677 28.7685 9.70514 30.1074 9.70514C31.4462 9.70514 32.5315 8.58677 32.5315 7.2072V5.69622C32.5315 4.31665 31.4462 3.19828 30.1074 3.19828C28.7685 3.19828 27.6832 4.31665 27.6832 5.69622Z" fill="currentColor"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M13.3334 5.69622V7.2072C13.3334 9.16537 11.7929 10.7528 9.89252 10.7528C7.99219 10.7528 6.45166 9.16537 6.45166 7.2072V5.69622C6.45166 4.42951 7.10748 3.25901 8.17209 2.62565C9.2367 1.9923 10.5483 1.9923 11.613 2.62565C12.6776 3.25901 13.3334 4.42951 13.3334 5.69622ZM7.46836 5.69622V7.2072C7.46836 8.09962 7.9304 8.92426 8.68044 9.37048C9.43048 9.81669 10.3546 9.81669 11.1046 9.37048C11.8546 8.92426 12.3167 8.09962 12.3167 7.2072V5.69622C12.3167 4.31665 11.2313 3.19828 9.89252 3.19828C8.55369 3.19828 7.46836 4.31665 7.46836 5.69622Z" fill="currentColor"></path>
                                    </svg></div>
                                <div class="main">
                                    <h4 class="main_title">Accommodates guests</h4>
                                    <p class="main_text">Welcoming spaces for your memorable stay</p>
                                </div>
                            </li>
                            <li class="list-item d-flex align-items-sm-center" data-aos="fade-up" data-aos-delay="100">
                                <div class="media theme-element theme-element--accent"><svg width="40" height="40" viewbox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M25.3333 19.3333V25.4006C26.8527 25.7106 28 27.0573 28 28.6666V32.6666V39.3333C28 39.7013 27.7013 39.9999 27.3333 39.9999H24.6667C24.2987 39.9999 24 39.7013 24 39.3333V37.3333H4V39.3333C4 39.7013 3.70133 39.9999 3.33333 39.9999H0.666667C0.298667 39.9999 0 39.7013 0 39.3333V32.6666V28.6666C0 27.0573 1.14733 25.7106 2.66667 25.4006V19.3333C2.66667 18.2306 3.564 17.3333 4.66667 17.3333H23.3333C24.436 17.3333 25.3333 18.2306 25.3333 19.3333ZM4.66667 18.6666C4.29933 18.6666 4 18.9659 4 19.3333V25.3333H5.33333V22.6666C5.33333 21.5639 6.23067 20.6666 7.33333 20.6666H11.3333C12.436 20.6666 13.3333 21.5639 13.3333 22.6666V25.3333H14.6667V22.6666C14.6667 21.5639 15.564 20.6666 16.6667 20.6666H20.6667C21.7693 20.6666 22.6667 21.5639 22.6667 22.6666V25.3333H24V19.3333C24 18.9659 23.7007 18.6666 23.3333 18.6666H4.66667ZM21.3333 22.6666V25.3333H16V22.6666C16 22.2993 16.2993 21.9999 16.6667 21.9999H20.6667C21.034 21.9999 21.3333 22.2993 21.3333 22.6666ZM12 25.3333V22.6666C12 22.2993 11.7007 21.9999 11.3333 21.9999H7.33333C6.966 21.9999 6.66667 22.2993 6.66667 22.6666V25.3333H12ZM26.6667 38.6666H25.3333V36.6666C25.3333 36.2986 25.0347 35.9999 24.6667 35.9999H3.33333C2.96533 35.9999 2.66667 36.2986 2.66667 36.6666V38.6666H1.33333V33.3333H26.6667V38.6666ZM1.33333 31.9999H26.6667V28.6666C26.6667 27.5639 25.7693 26.6666 24.6667 26.6666H22H15.3333H12.6667H6H3.33333C2.23067 26.6666 1.33333 27.5639 1.33333 28.6666V31.9999Z" fill="currentColor"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M30.0002 25.3333H39.3335C39.7015 25.3333 40.0002 25.6319 40.0002 25.9999V31.3333V35.9999H38.6668V31.9999H30.6668V35.9999H29.3335V31.3333V25.9999C29.3335 25.6319 29.6322 25.3333 30.0002 25.3333ZM30.6668 30.6666H38.6668V26.6666H30.6668V30.6666Z" fill="currentColor"></path>
                                        <rect x="33.3335" y="28" width="2.66667" height="1.33333" fill="currentColor">
                                        </rect>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M36.6326 15.7886L37.9659 19.7886C38.0332 19.9919 37.9992 20.2153 37.8739 20.3893C37.7486 20.5639 37.5472 20.6666 37.3332 20.6666H35.3332V22.6666H36.6666V23.9999H32.6666V22.6666H33.9999V20.6666H31.9999C31.7859 20.6666 31.5846 20.5639 31.4592 20.3899C31.3339 20.2159 31.2992 19.9926 31.3672 19.7893L32.7006 15.7893C32.7919 15.5166 33.0459 15.3333 33.3332 15.3333H35.9999C36.2872 15.3333 36.5412 15.5166 36.6326 15.7886ZM33.8139 16.6666L32.9246 19.3333H36.4086L35.5199 16.6666H33.8139Z" fill="currentColor"></path>
                                        <path d="M39.606 8.72467L20.2727 0.058C20.0987 -0.0193333 19.9007 -0.0193333 19.7273 0.058L0.394 8.72467C0.154 8.83267 0 9.07067 0 9.33333V17.3333H1.33333V9.76467L20 1.39733L38.6667 9.76533V17.3333H40V9.33333C40 9.07067 39.846 8.83267 39.606 8.72467Z" fill="currentColor"></path>
                                        <path d="M24.6022 9.22259L23.2868 9.44392C23.3182 9.62592 23.3335 9.81259 23.3335 9.99992C23.3335 11.8379 21.8382 13.3333 20.0002 13.3333C18.1622 13.3333 16.6668 11.8379 16.6668 9.99992C16.6668 8.16192 18.1622 6.66659 20.0002 6.66659C20.3815 6.66659 20.7562 6.73059 21.1122 6.85659L21.5562 5.59925C21.0568 5.42259 20.5335 5.33325 20.0002 5.33325C17.4268 5.33325 15.3335 7.42659 15.3335 9.99992C15.3335 12.5733 17.4268 14.6666 20.0002 14.6666C22.5735 14.6666 24.6668 12.5733 24.6668 9.99992C24.6668 9.73858 24.6448 9.47725 24.6022 9.22259Z" fill="currentColor"></path>
                                        <path d="M24.1953 5.52856L20 9.7239L19.138 8.8619L18.1953 9.80456L19.5286 11.1379C19.6586 11.2679 19.8293 11.3332 20 11.3332C20.1706 11.3332 20.3413 11.2679 20.4713 11.1379L25.138 6.47123L24.1953 5.52856Z" fill="currentColor"></path>
                                    </svg></div>
                                <div class="main">
                                    <h4 class="main_title">Grateful guests</h4>
                                    <p class="main_text">Guests leave with hearts full</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="promo_media" data-aos="fade-up">
                        <picture>
                            <source data-srcset="img/index/promo.webp" srcset="img/index/promo.webp"><img class="lazy" data-src="img/index/promo.jpg" src="img/index/promo.jpg" alt="media">
                        </picture>
                        <!-- <div class="media_card media_card--top" data-aos="fade-left">
                            <h4 class="media_card-text">This is the perfect hostel for a weekend getaway!</h4>
                            <div class="media_card-footer d-flex align-items-center"><span class="avatar">
                                    <picture>
                                        <source data-srcset="img/room/roomreview02.webp"
                                            srcset="img/room/roomreview02.webp"><img class="lazy"
                                            data-src="img/room/roomreview02.jpg" src="img/room/roomreview02.jpg"
                                            alt="media">
                                    </picture>
                                </span>
                                <div class="wrapper d-flex flex-column">
                                    <div class="stars d-flex align-items-center"><i class="icon-star icon"></i> <i
                                            class="icon-star icon"></i> <i class="icon-star icon"></i> <i
                                            class="icon-star icon"></i> <i class="icon-star icon"></i></div><span
                                        class="name h6">Esmond Ward</span>
                                </div>
                            </div>
                        </div>
                        <div class="media_card media_card--bottom" data-aos="fade-right">
                            <h4 class="media_card-text">Family Room with Private Bathroom</h4>
                            <div class="media_card-pricing"><span class="h2">$149</span> / 1 night</div><a
                                class="media_card-btn btn theme-element theme-element--light" href="#">See
                                availability</a>
                        </div> -->
                    </div>
                </div>
            </div>
        </section>

    </main>
    <div class="video d-flex align-items-center justify-content-center">
        <div class="container">
            <div class="video_frame d-flex align-items-center justify-content-center"><i class="icon-close video_frame-close"></i>
                <div id="player"></div>
            </div>
        </div>
    </div>

    <footer class="footer accent">
        <div class="container">
            <div class="footer_main d-sm-flex flex-wrap flex-lg-nowrap justify-content-between">
                <div class="footer_main-block footer_main-block--about col-sm-7 col-lg-auto d-flex flex-column">
                    <a class="brand d-flex align-items-center" href="index.php">
                        <img class="lazy" data-src="img/logo-light.png" src="img/logo-light.png" alt="media" style="width: 200px;">
                    </a>
                    <p class="footer_main-block_text">
                        Experience the magic of rooms for rent near me. From inviting spaces to friendly faces, our
                        accommodations provide the comfort and community you've been searching for.
                    </p>
                </div>
                <div class="footer_main-block footer_main-block--nav col-sm-6 col-lg-auto">
                    <h4 class="footer_main-block_header">Quick links</h4>
                    <ul class="footer_main-block_nav d-flex flex-lg-column">
                        <li class="list-item"><a class="link underlined underlined--white nav-item" data-page="home" href="index.php">Home</a></li>
                        <li class="list-item"><a class="link underlined underlined--white nav-item" data-page="about" href="about.php">About</a></li>
                        <li class="list-item"><a class="link underlined underlined--white nav-item" data-page="rooms" href="rooms.php">Rooms</a></li>
                        <li class="list-item"><a class="link underlined underlined--white nav-item" data-page="news" href="contacts2.php">Contact Us</a></li>
                    </ul>
                </div>
                <div class="footer_main-block footer_main-block--contacts col-sm-5 col-lg-auto">
                    <h4 class="footer_main-block_header">Contact Us</h4>
                    <ul class="footer_main-block_contacts">
                        <li class="list-item d-flex"><i class="icon-location icon"></i>
                            <p class="wrapper">
                                <span class="linebreak">No.23, EVS street, </span>
                                <span class="linebreak">Renga Nagar, Srirangam, <br>Trichy</span>
                            </p>
                        </li>
                        <li class="list-item d-flex"><span class="icon-call icon"><svg width="28" height="29" viewbox="0 0 28 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M26.9609 19.75L21 17.1797C20.7812 17.125 20.5625 17.0703 20.3438 17.0703C19.7969 17.0703 19.3047 17.2891 19.0312 17.6719L16.625 20.625C12.7969 18.7656 9.73438 15.7031 7.875 11.875L10.8281 9.46875C11.2109 9.19531 11.4297 8.70312 11.4297 8.15625C11.4297 7.9375 11.375 7.71875 11.3203 7.5L8.75 1.53906C8.47656 0.9375 7.875 0.5 7.21875 0.5C7.05469 0.5 6.94531 0.554688 6.83594 0.554688L1.3125 1.86719C0.546875 2.03125 0 2.6875 0 3.50781C0 17.3438 11.2109 28.5 24.9922 28.5C25.8125 28.5 26.4688 27.9531 26.6875 27.1875L27.9453 21.6641C27.9453 21.5547 27.9453 21.4453 27.9453 21.2812C27.9453 20.625 27.5625 20.0234 26.9609 19.75ZM24.9375 26.75C12.1406 26.75 1.75 16.3594 1.75 3.5625L7.16406 2.30469L9.67969 8.15625L5.6875 11.4375C8.36719 17.0703 11.4297 20.1328 17.1172 22.8125L20.3438 18.8203L26.1953 21.3359L24.9375 26.75Z" fill="currentColor"></path>
                                </svg></span>
                            <p class="wrapper d-flex flex-column">
                                <a class="link" href="tel:+919003828304">+91 9003828304</a>
                                <a class="link" href="tel:+0431-2434036">0431-2434036</a>
                            </p>
                        </li>
                    </ul>
                </div>
                <div class="footer_main-block footer_main-block--follow col-sm-5 col-lg-auto d-flex flex-column">
                    <h4 class="footer_main-block_header">Follow Us</h4>
                    <p class="footer_main-block_text">Stay connected for more updates and offers!</p>
                    <ul class="socials d-flex align-items-center">
                        <li class="list-item"><a class="link" href="https://www.facebook.com/profile.php?id=61556385740161" target="_blank"><i class="icon-facebook"></i></a></li>
                        <li class="list-item"><a class="link" href="https://www.instagram.com/paavai_tower/" target="_blank"><i class="icon-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="row pb-3">
                <div class="col-6">
                    Copyright © 2023 <span>Paavai Tower</span>. All Rights Reserved
                </div>
                <div class="col-6" style="text-align: right;">
                    Crafted by
                    <a href="https://zworktechnology.com/" class="link underlined underlined--white nav-item" target="_blank">
                        <span>zworktechnology.com</span>
                    </a>
                </div>
            </div>
        </div>
    </footer>
    <script src="js/common.min.js"></script>
    <script src="js/index.min.js"></script>
    <script src="js/gallery.min.js"></script>
    <script src="js/demo.js"></script>
</body>

</html>