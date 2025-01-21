<div class="container-fluid bg-dark px-0">
            <div class="row gx-0">
                <div class="col-lg-3 bg-dark d-none d-lg-block">
                    <a href="/" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                        <img class="Logo" src="assets/img/Logo.png" alt="Brand">
                        <h1 class="m-0 text-primary text-uppercase">El Scaro</h1>
                    </a>
                </div>
                <div class="col-lg-9">
                    <div class="row gx-0 bg-white d-none d-lg-flex">
                        <div class="col-lg-7 px-5 text-start">
                            <div class="h-100 d-inline-flex align-items-center py-2 me-4">
                                <i class="fa fa-envelope text-primary me-2"></i>
                                <p class="mb-0">reservations@elscarohotels.com</p>
                            </div>
                            <div class="h-100 d-inline-flex align-items-center py-2">
                                <i class="fa fa-phone-alt text-primary me-2"></i>
                                <p class="mb-0">+012 345 6789</p>
                            </div>
                        </div>
                        <div class="col-lg-5 px-5 text-end">
                            <div class="d-inline-flex align-items-center py-2">
                                <a class="me-3" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="me-3" href=""><i class="fab fa-twitter"></i></a>
                                <a class="me-3" href=""><i class="fab fa-linkedin-in"></i></a>
                                <a class="me-3" href=""><i class="fab fa-instagram"></i></a>
                                <a class="" href=""><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                    <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3 p-lg-0">
                        <a href="/" class="navbar-brand d-block d-lg-none d-flex align-items-center justify-content-center">
                            <img class="Logo" src="assets/img/Logo.png" alt="Brand">
                            <h1 class="m-0 text-primary text-uppercase">El Scaro</h1>
                        </a>
                        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <!-- Menu Navigasi -->
                            <div class="navbar-nav mr-auto py-0">
                                <a href="/" class="nav-item nav-link <?= (basename($_SERVER['PHP_SELF']) == "index.php") ? "active" : ""; ?>">Home</a>
                                <a href="about" class="nav-item nav-link <?= (basename($_SERVER['PHP_SELF']) == "about") ? "active" : ""; ?>">About</a>
                                <a href="services" class="nav-item nav-link <?= (basename($_SERVER['PHP_SELF']) == "services") ? "active" : ""; ?>">Services</a>
                                <a href="rooms" class="nav-item nav-link <?= (basename($_SERVER['PHP_SELF']) == "rooms") ? "active" : ""; ?>">Rooms</a>
                                <div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                                    <div class="dropdown-menu rounded-0 m-0">
                                        <a href="booking" class="dropdown-item <?= (basename($_SERVER['PHP_SELF']) == "booking") ? "active" : ""; ?>">Booking</a>
                                        <a href="team" class="dropdown-item <?= (basename($_SERVER['PHP_SELF']) == "team") ? "active" : ""; ?>">Our Team</a>
                                        <a href="testimoni" class="dropdown-item <?= (basename($_SERVER['PHP_SELF']) == "testimoni") ? "active" : ""; ?>">Testimonial</a>
                                    </div>
                                </div>
                            </div>
                           <!-- Login -->
                            <ul class="navbar-nav navbar-right">
                                <li>
                                    <a href="login" class="login-button">
                                        <span class="glyphicon glyphicon-log-in"></span> Login  
                                    </a>
                                </li>
                            </ul>
                            




                            
                            <!-- <div> -->
                                <!-- sebelum login -->
                                <!-- <div id="loginWrapper">
                                    <a href="/login" class="btn btn-primary rounded-0 py-4 px-md-5 d-none d-lg-block">
                                        Login <i class="fa fa-arrow-right ms-3"></i>
                                    </a>
                                </div> -->

                                <!-- sesudah login -->
                                <!-- <div id="welcomeWrapper" style="display: none;">
                                    <div class="text-center">
                                        <h4>Welcome back, User!</h4>
                                        <button id="logoutBtn" class="btn btn-danger mt-3">Logout</button>
                                    </div>
                                </div> -->
                            <!-- </div> -->
                            <!-- <a href="https://htmlcodex.com/hotel-html-template-pro" class="btn btn-primary rounded-0 py-4 px-md-5 d-none d-lg-block">Premium Version<i class="fa fa-arrow-right ms-3"></i></a> -->

                            <!-- Login 2 -->
                            <!-- <ul class="nav navbar-nav navbar-right" style="clear: both;">
                                <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                                <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                            </ul> -->

                            
                            <!-- Login 3 -->

                            <!-- <div class="c-modal_item mr-auto py-0">
                                <span class="c-modal_sign-in">
                                    <a href="#" data-target="#form-login" class="btn-active-modal">LOG IN</a>
                                </span>
                                <span class="c-modal_sign-up">
                                    <a href="#" data-target="#form-sign-up" class="btn-active-modal">SIGN UP</a>
                                </span>
                            </div> -->
                            <!-- <a href="https://htmlcodex.com/hotel-html-template-pro" class="btn btn-primary rounded-0 py-4 px-md-5 d-none d-lg-block">Premium Version<i class="fa fa-arrow-right ms-3"></i></a> -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    

        <div class="container-fluid page-header p-0" style="background-image: url(assets/img/carousel-1.jpg);">
            <div class="container-fluid page-header-inner py-5">
                <div class="container text-center pb-5">
                    <h1 class="display-3 text-white mb-0 mt-2 fw-normal animated slideInDown">
                        <?php
                        // Mendapatkan nama halaman saat ini
                        $currentPage = basename($_SERVER['PHP_SELF'], ".php");

                        // Menentukan judul berdasarkan halaman
                        switch ($currentPage) {
                            case "index":
                                echo "Home";
                                break;
                            case "about":
                                echo "About Us";
                                break;
                            case "services":
                                echo "Our Services";
                                break;
                            case "rooms":
                                echo "Rooms";
                                break;
                            case "booking":
                                echo "Booking";
                                break;
                            case "team":
                                echo "Our Team";
                                break;
                            case "testimoni":
                                echo "Our Testimonials";
                                break;
                            default:
                                echo "Welcome";
                                break;
                        } 
                        ?>
                    </h1>
                </div>
            </div>
        </div>

        <!-- booking bar -->
        <!-- <div class="container-fluid booking pb-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container">
                <div class="bg-white shadow" style="padding: 35px;">
                    <div class="row g-2">
                        <div class="col-md-10">
                            <div class="row g-2">
                                <div class="col-md-3">
                                    <div class="date" id="date1" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input"
                                            placeholder="Check in" data-target="#date1" data-toggle="datetimepicker" />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="date" id="date2" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input" placeholder="Check out" data-target="#date2" data-toggle="datetimepicker"/>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <select class="form-select">
                                        <option selected>Adult</option>
                                        <option value="1">Adult 1</option>
                                        <option value="2">Adult 2</option>
                                        <option value="3">Adult 3</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <select class="form-select">
                                        <option selected>Child</option>
                                        <option value="1">Child 1</option>
                                        <option value="2">Child 2</option>
                                        <option value="3">Child 3</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-primary w-100">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

        <!-- JQuery Tambahan -->
<!-- <script type="text/javascript">
        $(document).ready(function(){
        $('#ttlHome').click(function(){
            $('#ttlHead').html('Home');
        });
        $('#ttlPages').click(function(){
            $('#ttlHead').html('Pages');
        });
        $('#ttlAbout').click(function(){
            $('#ttlHead').html('About Us');
        });
        });
</script> -->




<!-- <a href="#" data-toggle="modal" data-target="#form-login" class="btn-active-modal">Sign in</a> -->



<!-- <a href="javascript:void(0)" data-toggle="modal" data-target="#form-sign-up" class="btn-active-modal">Sign up</a> -->