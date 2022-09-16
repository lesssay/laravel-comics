@extends('layouts.main')

@section('main-content')
    <section id="comic">

        <div class="top">
            <div class="container">
                <div class="text">
                    <h1>ACTION COMICS #1000: THE DELUXE EDITION</h1>
                    <div class="details">
                        <div class="price">US PRICE: $19.99</div>

                        <div class="availability">AVAILABLE</div>
                        
                        <div class="check">Check Availability</div>
                    </div>
                    <div class="description">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                        Velit atque dolorem, fuga animi neque architecto sequi voluptate, 
                        totam accusantium, cum ad ducimus officiis adipisci placeat dignissimos sed quam qui? Nesciunt?
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                        Velit atque dolorem, fuga animi neque architecto sequi voluptate, 
                        totam accusantium, cum ad ducimus officiis adipisci placeat dignissimos sed quam qui? Nesciunt?
                    </div>
                </div>
                <figure>
                    <strong>ADVERTISEMENT</strong>
                    <img src="{{asset('images/adv.jpg')}}" alt="">
                </figure>
            </div>
        </div>
                
        <div class="bottom">
        </div>

    </section>
@endsection