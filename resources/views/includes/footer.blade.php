<footer>
    <div class="top">
        <div class="container">
            @foreach($footer_links as $footer_link)
            <div class="card">
                <figure>
                    <a href=""><img src="{{ asset($footer_link['url']) }}" alt="{{ $footer_link['text'] }}"></a>
                </figure>
                <figcaption>{{ $footer_link['text']}}</figcaption>
            </div>
            @endforeach
        </div>
    </div>    
    
    <div class="middle">
            <div class="container">
                        <nav>
                            <div class="col dc-comics">
                            <p>DC COMICS</p>
                                <ul>
                                    <li><a href="">Characters</a></li>
                                    <li><a href="">Comics</a></li>
                                    <li><a href="">Movies</a></li>
                                    <li><a href="">TV</a></li>
                                    <li><a href="">Games</a></li>
                                    <li><a href="">Videos</a></li>
                                    <li><a href="">News</a></li>
                                        <p>SHOP</p>
                                    <ul class="shop">
                                        <li><a href="">Shop DC</a></li>
                                        <li><a href="">Shop DC Collectibles</a></li>
                                    </ul>
                                </ul>
                            </div>
                            <div class="col dc">
                                <p>DC</p>
                                <ul>
                                    <li><a href="">Terms of use</a></li>
                                    <li><a href="">Privacy policy (New)</a></li>
                                    <li><a href="">Add choices</a></li>
                                    <li><a href="">Advertising</a></li>
                                    <li><a href="">Jobs</a></li>
                                    <li><a href="">Subscription</a></li>
                                    <li><a href="">Talent Workshops</a></li>
                                    <li><a href="">CPSC Certificates</a></li>
                                    <li><a href="">Ratings</a></li>
                                    <li><a href="">Shop Help</a></li>
                                    <li><a href="">Contact Us</a></li>
                                </ul>
                            </div>

                            <div class="col sites">
                                <p>SITES</p>
                                <ul>
                                    <li><a href="">DC</a></li>
                                    <li><a href="">MAD Magazine</a></li>
                                    <li><a href="">DC Kids</a></li>
                                    <li><a href="">DC Universe</a></li>
                                    <li><a href="">DC Power Visa</a></li>
                                </ul>
                            </div>
                        </nav>

                    <div class="big-logo">
                        <img src="{{ asset('images/dc-logo-bg.png') }}" alt="Dc-logo">
                    </div>
            </div>
        </div>

        <div class="bottom">
            <div class="container">
                <nav>
                    <div>
                        <button>SIGN-UP NOW!</button>
                    </div>

                    <div class="social">
                        <ul>
                            <li><a class="follow" href="">FOLLOW US</a></li>
                            <li><a href=""><img src="{{asset('images/footer-facebook.png')}}" alt="facebook-icon"></a></li>
                            <li><a href=""><img src="{{asset('images/footer-twitter.png')}}" alt="twitter-icon"></a></li>
                            <li><a href=""><img src="{{asset('images/footer-youtube.png')}}" alt="youtube-icon"></a></li>
                            <li><a href=""><img src="{{asset('images/footer-pinterest.png')}}" alt="pinterest-icon"></a></li>
                            <li><a href=""><img src="{{asset('images/footer-periscope.png')}}" alt="periscope-icon"></a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
</footer>
