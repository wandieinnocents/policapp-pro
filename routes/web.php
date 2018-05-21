<?php

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
    return redirect('admin');
});

// --------------------
// Backpack\Demo routes
// --------------------
Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => ['admin'],
    'namespace'  => 'Admin',
], function () {
    // CRUD resources and other admin routes
    CRUD::resource('criminalreport', 'CriminalReportCrudController');
    CRUD::resource('casefeed', 'CaseFeedCrudController');
    CRUD::resource('crime', 'CrimeCrudController');
    CRUD::resource('message', 'MessageCrudController');
    CRUD::resource('participant', 'ParticipantCrudController');
    CRUD::resource('thread', 'ThreadCrudController');
});
