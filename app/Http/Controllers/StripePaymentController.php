<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe;
use Stripe\StripeClient;

class StripePaymentController extends Controller
{
    // public function stripe()
    // {

    //     return view('stripe');
    // }

    public function stripeCheckout(Request $request)
    {

        $Stripe = new StripeClient(env('STRIPE_SECRET'));
        $redirectUrl = route('Stripe.Checkout.success') . '?session_id={CHECKOUT_SESSION_ID}';

        $response = $Stripe->checkout->sessions->create([
            'success_url' => $redirectUrl,
            // 'customer_email' => 'demo@email.com',
            'payment_method_types' => ['link', 'card'],
            'line_items' => [
                [
                    'price_data' => [
                        'product_data' => [
                            'name' => $request->product,
                        ],
                        'unit_amount' => $request->price * 100,
                        'currency' => 'usd',

                    ],
                    'quantity' => 1,

                ]
            ],

            'mode' => 'payment',
            'allow_promotion_codes' => true,

        ]);

        return redirect($response['url']);

    }

    public function stripeCheckoutSuccess(Request $request)
    {

        $Stripe = new StripeClient(env('STRIPE_SECRET'));

        $response = $Stripe->checkout->sessions->retrieve($request->session_id);

        return redirect()->route('all_products')->withSuccess('Payment Successful.');
    }

}
