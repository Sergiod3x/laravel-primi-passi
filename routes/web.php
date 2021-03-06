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
    return view('home');
});

Route::get('/pietro', function () {
    return view('personaggio',
        [
            'name' => 'Pietro',
            'srcLogo' => 'https://static.miraheze.org/nonciclopediawiki/a/a9/Pietro_Gambadilegno.gif'
        ]
    );
});

Route::get('/pluto', function () {
    return view('personaggio',
        [
            'name' => 'Pluto',
            'srcLogo' => 'https://i0.wp.com/www.ventennipaperoni.com/wp-content/uploads/2020/05/pluto.jpg?resize=512%2C288&ssl=1'
        ]
    );
});

Route::get('/topolino', function () {
    return view('personaggio',
        [
            'name' => 'Topolino',
            'srcLogo' => 'https://www.tgtourism.tv/wp-content/uploads/2018/03/topolino.jpg'
        ]
    );
});

Route::get('/pippo', function () {
    return view('personaggio',
        [
            'name' => 'Pippo',
            'srcLogo' => 'https://www.topolino.it/wp-content/uploads/2019/12/pippointera.png'
        ]
    );
});

Route::get('/minnie', function () {
    return view('personaggio',
        [
            'name' => 'Minnie',
            'srcLogo' => 'https://www.shop.event-planner.it/wp-content/uploads/2020/07/7752f59d6892ab81b24fb3c85d0355b1.jpg'
        ]
    );
});

Route::get('/paperino', function () {
    return view('personaggio',
        [
            'name' => 'Paperino',
            'srcLogo' => 'https://fandompixs.com/wp-content/uploads/2019/11/Paperino-02.jpg'
        ]
    );
});
