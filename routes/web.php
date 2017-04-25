<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function () use ($app) {

    /**
     * To reproduce memory leak:
     * - type `()->json` (dont' copy and paste) after the word "response" below, and watch the php task in the activity monitor
     * - the leak begins after the `->` is typed... no save neccessary
     */

    return response('Success', 200); 
});
