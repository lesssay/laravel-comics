<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $header_links = [
        [
          'text'=> 'Characters',
          'url'=> '#',
          'current'=> false,
        ],
        [
          'text'=> 'Comics',
          'url'=> '#',
          'current'=> true,
        ],
        [
          'text'=> 'Movies',
          'url'=> '#',
          'current'=> false,
        ],
        [
          'text'=> 'TV',
          'url'=> '#',
          'current'=> false,
        ],
        [
          'text'=> 'Games',
          'url'=> '#',
          'current'=> false,
        ],
        [
          'text'=> 'Collectibles',
          'url'=> '#',
          'current'=> false,
        ],
        [
          'text'=> 'Videos',
          'url'=> '#',
          'current'=> false,
        ],
        [
          'text'=> 'Fans',
          'url'=> '#',
          'current'=> false,
        ],
        [
          'text'=> 'News',
          'url'=> '#',
          'current'=> false,
        ],
        [
          'text'=> 'Shop',
          'url'=> '#',
          'current'=> false,
        ]
    ];

    $comics_list = config('comics');

    $footer_links = [
      [
          'text' => "DIGITAL COMICS",
          'url' => "images/buy-comics-digital-comics.png",
      ],
      [
          'text' => "DC MERCHANDISE",
          'url' =>  "images/buy-comics-merchandise.png",
      ],
      [
          'text' => "SUBSCRIPTION",
          'url' =>  "images/buy-comics-subscriptions.png",
      ],
      [
          'text' => "COMIC SHOP LOCATOR",
          'url' => "images/buy-comics-shop-locator.png",
      ],
      [
          'text' => "DC POWER VISA",
          'url' =>  "images/buy-dc-power-visa.svg",
      ]
    ];

    return view('home', compact('header_links', 'comics_list', 'footer_links'));
})->name('home');
