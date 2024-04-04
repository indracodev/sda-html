<nav id="navtop" class="navbar navbar-expand-lg bg-white py-lg-4 sticky-top overflow-y-hidden d-block">
    <div class="container flex-lg-wrap">
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navcol" aria-controls="navcol" aria-expanded="false" aria-label="Toggle navigation" style="transform: translateX(-.75rem)">
            <i class="bi bi-three-dots"></i>
        </button>
        <a class="navbar-brand d-flex align-items-center m-0" href="index.php">
            <img src="assets/img/logo-sda.png" height="auto" style="width: calc(125px + 5vw)" alt="">
        </a>
        <button class="navbar-toggler border-0" type="button" style="transform: translateX(.75rem)">
            <i class="bi bi-search"></i>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navcol">
            <ul class="navbar-nav text-capitalize">
                <li class="nav-item my-2 my-lg-0 mx-auto">
                    <a class="nav-link d-inline-flex" href="aboutus.php">
                        About Us <img src="assets/img/ve.png" class="ms-2 d-none d-lg-block" width="auto" height="14" style="align-self:center;">
                    </a>
                </li>
                <li class="nav-item my-2 my-lg-0 mx-auto">
                    <a class="nav-link d-inline-flex" href="contactus.php">
                        Contact Us <img src="assets/img/ve.png" class="ms-2 d-none d-lg-block " width="auto" height="14" style="align-self:center;">
                    </a>
                </li>
                <li class="nav-item my-2 my-lg-0 mx-auto d-none">
                    <a class="nav-link d-inline-flex" href="#">
                        Industries <img src="assets/img/ve.png" class="ms-2 d-none d-lg-block" width="auto" height="14" style="align-self:center;">
                    </a>
                </li>
                <li class="nav-item my-2 my-lg-0 mx-auto d-none">
                    <a class="nav-link d-inline-flex" href="#">
                        Resource <img src="assets/img/ve.png" class="ms-2 d-none d-lg-block" width="auto" height="14" style="align-self:center;">
                    </a>
                </li>
            </ul>
        </div>
        <div class="collapse navbar-collapse" style="flex:none; flex-direction:column-reverse;">
            <div class="but d-none">
                <ul class="navbar-nav ms-auto text-capitalize mt-2">
                    <li class="nav-item me-3">
                        <button type="button" class="btn btn-danger fw-bold">CHAT TO US</button>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="btn btn-light fw-bold">OUR DEMO</button>
                    </li>
                </ul>
            </div>
            <div class="tumb d-none">
                <ul class="navbar-nav ms-auto text-capitalize">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Log in
                            <img src="assets/img/ve.png" width="auto" height="10" alt="">
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="bi bi-search"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown">
                            <a class="btn dropdown-toggle border-0 " type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-globe2"></i>
                                <img src="assets/img/ve.png" width="auto" height="10" alt="">
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" x-placement="bottom-start">
                                <a class="dropdown-item" href="#">
                                    <img src="assets/img/en.png" alt="" class="img-fluid" width="15px">
                                    <small>
                                        ENGLISH
                                    </small>
                                </a>
                                <a class="dropdown-item" href="#">
                                    <img src="assets/img/id.png" alt="" class="img-fluid" width="15px">
                                    <small>
                                        BAHASA
                                    </small>
                                </a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<style>
    .nav-item a {
        padding: 0 1em !important
    }
    .nav-item img{
        rotate: 180deg;
    }
    .dropdown-toggle::after{
        display: none;
    }
    .navbar-nav li:hover img{
        transition: 1s;
        rotate: 0deg;
    }
    .navbar-nav li:hover{
        transform: scale(1.2);
        transition: .55s;
    }

</style>