@extends('layouts.main')

@section('title', 'Comics')

@section ('main-content')

<main>
    <div id="content">
        <div class="container"> 
            @foreach($comics_list as $comic)
            <div class="card">
                <a href=" {{route('comics.show', ['id' => $loop->index])}} ">
                <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}" />
                <h1>{{ $comic['title'] }}</h1>
                </a>
            </div>
            @endforeach
        </div>
    </div>    
</main>

@endsection

@section ('navbar-content')

<div class="navbar">
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

@endsection
