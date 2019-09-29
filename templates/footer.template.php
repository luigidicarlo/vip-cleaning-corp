<div class="container-fluid px-0">
    <footer class="d-block bg-primary py-4 mt-2">
        <div class="container">
            <div class="row mw-100">
                <div class="col-md-6 col-xs-12">
                    <ul class="list-group border-0">
                        <li class="list-group-item border-0 bg-primary py-0">
                            <a href="#" class="text-white nav-link">
                                Home
                            </a>
                        </li>
                        <li class="list-group-item border-0 bg-primary py-0">
                            <a href="#info" class="text-white nav-link">
                                About Us
                            </a>
                        </li>
                        <li class="list-group-item border-0 bg-primary py-0">
                            <a href="#services" class="text-white nav-link">
                                Services
                            </a>
                        </li>
                        <li class="list-group-item border-0 bg-primary py-0">
                            <a href="#contact" class="text-white nav-link">
                                Contact Us
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 col-xs-12">
                    <div class="d-flex align-items-center justify-content-left">
                        <div style="height: 36px; width: 36px;" class="bg-primary rounded text-white mr-2 p-2">
                            <i class="fa fa-lg fa-phone"></i>
                        </div>
                        <p class="text-white mb-0">
                            +1 (786) 7075593
                        </p>
                    </div>
                    <div class="d-flex align-items-center justify-content-left">
                        <div style="height: 36px; width: 36px;" class="bg-primary rounded text-white mr-2 p-2">
                            <i class="fa fa-lg fa-address-card-o"></i>
                        </div>
                        <p class="text-white mb-0">
                            2079 South Kirkman Rd, Orlando, FL
                        </p>
                    </div>
                    <div class="d-flex align-items-center justify-content-left">
                        <div style="height: 36px; width: 36px;" class="bg-primary rounded text-white mr-2 p-2">
                            <i class="fa fa-lg fa-envelope"></i>
                        </div>
                        <p class="text-white mb-0 text-truncate">
                            <a id="footer-email" href="mailto:vipcleaning2.0@gmail.com">vipcleaning2.0@gmail.com</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <hr class="border-light">
        <p class="mx-auto text-center text-white">
            <small>
                &copy; VIP Cleaning Corp, <?php 
                    if (date('Y') !== '2019') {
                        echo '2019-'.date('Y');
                    } else {
                        echo date('Y');
                    }
                ?>.
            </small>
        </p>
    </footer>
</div>