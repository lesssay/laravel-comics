<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=" {{asset('css/app.css')}} ">
    <title>Comics</title>
</head>
<body>
@include('includes.header')

    <main>
        <div id="content">
            <div class="container"> 
                @foreach($comics_list as $comic)
                <div class="card">
                    <a href="">
                    <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}" />
                    <h1>{{ $comic['title'] }}</h1>
                    </a>
                </div>
                @endforeach
            </div>
        </div>    
    </main>

    @include('includes.footer')
</body>
</html>