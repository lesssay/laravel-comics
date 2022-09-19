<header>
    <nav>
        <div class="container">
            <div class="logo"><a href=""><img src="{{ asset('images/dc-logo.png')}}" alt=""></a></div>
            <div class="links">
                <ul>
                    @foreach($header_links as $index=>$header_link)
                    <li class="<?= $index === $loop->index ? 'active' : ''?>" ><a href= " {{ route('comics.index')}} ">{{ $header_link['text'] }}</a></li>
                    {{-- {{route(strtolower($header_link['text']))}} --}}
                    @endforeach
                </ul>
            </div>
        </div>
    </nav>
    <div class="jumbotron"></div>
</header>
