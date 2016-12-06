
<?php
use Illuminate\Http\Request;
use Illuminate\Log;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
//http://e-howtogeek.com/710944/problem-page-found-returns-http-status-code-instead-laravel

Route::get('/', function (Request $request) {
    $input = $request->all();
    $ps = $request->input('passcode');

    if ($ps === 'BuzzAR')
    return response('OK', 200)
        ->header('Content-Type', 'text/plain');
    else response('NOT EVEN CLOSE', 400)
        ->header('Content-Type', 'text/plain');
});


