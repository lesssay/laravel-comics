<header>
    <nav>
        <div class="container">
            <div class="logo"><a href=""><img src="{{ asset('images/dc-logo.png')}}" alt=""></a></div>
            <div class="links">
                <ul>
                    @foreach($header_links as $header_link)
                    <li><a href="#">{{ $header_link['text'] }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </nav>
    <div class="jumbotron"></div>
</header>
