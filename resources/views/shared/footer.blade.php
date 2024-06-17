<div class="footer-area">

    <div class=" footer">
        <div class="container">
            <div class="row">

                <div class="col-md-4 col-sm-6 wow fadeInRight animated">
                    <div class="single-footer">
                        <h4>About us </h4>
                        <div class="footer-title-line"></div>

                        <img src="assets/img/ngerplogo-footer.png" alt="" class="wow pulse" data-wow-delay="1s">
                        <p>Your Dream, Our Mission: Realize Homeownership Today!</p>
                        <ul class="footer-adress">
                            <li><i class="pe-7s-map-marker strong"> </i> B-204/205, WESTGATE, S.G.HIGHWAY.</li>
                            <li><i class="pe-7s-mail strong"> </i>info@nexusgroup.com</li>
                            <li><i class="pe-7s-call strong"> </i> +916352478028</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 wow fadeInRight animated">
                    <div class="single-footer">
                        <h4>Quick links </h4>
                        <div class="footer-title-line"></div>
                        <ul class="footer-menu">
                            <li><a href="{{ route('property') }}">Property</a>  </li>
                            <li><a href="{{ route('contact') }}">Contact us</a></li>
                            <li><a href="{{ route('terms') }}">Terms </a>  </li>
                            @if (Auth::check())
                                <li><a href="{{ route('feedback') }}">Feedbacks </a>  </li>
                            @endif
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 wow fadeInRight animated">
                    <div class="single-footer news-letter">
                        <h4>Stay in touch</h4>
                        <div class="footer-title-line"></div>
                        <p>Building Futures, One Brick at a Time: Your Key to Real Estate Success.</p>


                        <div class="social pull-right">
                            <ul>
                                <li><a class="wow fadeInUp animated" href="https://twitter.com/kimarotec"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="wow fadeInUp animated" href="https://www.facebook.com/kimarotec" data-wow-delay="0.2s"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="wow fadeInUp animated" href="https://plus.google.com/kimarotec" data-wow-delay="0.3s"><i class="fa fa-google-plus"></i></a></li>
                                <li><a class="wow fadeInUp animated" href="https://instagram.com/kimarotec" data-wow-delay="0.4s"><i class="fa fa-instagram"></i></a></li>
                                <li><a class="wow fadeInUp animated" href="https://instagram.com/kimarotec" data-wow-delay="0.6s"><i class="fa fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="footer-copy text-center">
        <div class="container">
            <div class="row">
                <div class="bottom-menu pull-right">
                    <ul>
                        <li><a class="wow fadeInUp animated" href="{{ route('home') }}" data-wow-delay="0.2s">Home</a></li>
                        <li><a class="wow fadeInUp animated" href="{{ route('property') }}" data-wow-delay="0.3s">Property</a></li>
                        <li><a class="wow fadeInUp animated" href="{{ route('contact') }}" data-wow-delay="0.6s">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</div>
