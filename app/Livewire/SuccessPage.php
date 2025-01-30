<?php

namespace App\Livewire;

use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Stripe\Checkout\Session;
use Stripe\Stripe;

class SuccessPage extends Component
{
    public $session_id;
    public function render()
    {
        $latest_order = Order::with('address')->where('user_id', Auth::id())
            ->latest()
            ->first();

        if ($this->session_id) {
            Stripe::setApiKey(env('STRIPE_SECRET'));
            $session_info = Session::retrieve($this->session_id);

            if ($session_info->payment_status != 'paid') {
                $latest_order->payment_status = 'faild';
                $latest_order->save();
                return redirect()->route('cancel');
            } elseif ($session_info->payment_status != 'paid') {
                $latest_order->payment_status = 'paid';
                $latest_order->save();
            }
        }
        return view('livewire.success-page', [
            'order' => $latest_order
        ]);
    }
}
