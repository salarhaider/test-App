<?php

use App\Http\Controllers\productcontroller;
use App\Http\Controllers\StripePaymentController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\validUser;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
})->name('login');

// Route::get('/', 'login')->name('login');
Route::post('login_user', [UserController::class, 'login_user'])->name('login_user');

Route::get('register', function () {
    return view('register');
})->name('register');
Route::post('register_user', [UserController::class, 'register_user'])->name('register_user');


// Route::get('dashboard', [UserController::class, 'dashboard'])->name('dashboard');

Route::middleware(['auth'])->group(function (){

    Route::controller(productcontroller::class)->group(function () {

        Route::get('/products', 'index')->name('all_products')->withoutMiddleware(['auth']);
        Route::get('product/{id}', 'fetch_single_product')->name('fetch_single_product')->withoutMiddleware(['auth']);
        // Route::view('product/{id}/view', 'view_product')->name('view_single_product');
        Route::get('create_product', 'create_product')->name('create_product');
        Route::post('add_product', 'add_product')->name('add_product');

    });

});

#test comment

// Route::get('/products', [productcontroller::class, 'index'])->name('all_products');
// Route::get('products/{id}/', [productcontroller::class, 'fetch_single_product'])->name('fetch_single_product');
// // Route::view('product/{id}/view', 'view_product')->name('view_single_product');


// Route::get('create_product', [productcontroller::class, 'create_product'])->name('create_product');
// Route::post('add_product', [productcontroller::class, 'add_product'])->name('add_product');


Route::controller(StripePaymentController::class)->group(function () {

    // Route::get('stripe', 'stripe')->name('stripe.index');
    Route::get('stripe/checkout', 'stripeCheckout')->name('Stripe.Checkout');
    Route::get('stripe/checkout/successfull', 'stripeCheckoutSuccess')->name('Stripe.Checkout.success');

});

Route::get('logout', [UserController::class, 'logout'])->name('logout');

