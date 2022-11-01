<?php

use Illuminate\Support\Facades\Route;
use GuzzleHttp\Client;
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
    $client = new Client([
        // Base URI is used with relative requests
        'base_uri' => 'https://api.github.com/search/users?q=YOUR_NAME',
        // You can set any number of default request options.
        'timeout'  => 2.0,
        // Send a request to https://foo.com/api/test
    ]);
    $response = $client->request('GET');
    $users = json_decode($response->getBody()->getContents());
    return view('users.index', compact('users'));
});
Route::get('profile/{name}', function ($name) {
    $client = new Client([
        // Base URI is used with relative requests
        'base_uri' => 'https://api.github.com/users/'.$name,
        // You can set any number of default request options.
        'timeout'  => 2.0,
        // Send a request to https://foo.com/api/test
    ]);
    $response = $client->request('GET');
    $profile = json_decode($response->getBody()->getContents());
    // return $users;
    return view('users.show', compact('profile'));
});
