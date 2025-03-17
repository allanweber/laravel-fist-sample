<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function index() {

        // $orders = Order::where('user_id', 1)->get();
        $orders = Order::all();

        return view('orders', ['name' => 'Allan Weber', 'orders' => $orders]);
    }

    public function show(Order $order)
    {
        return view('order', ['order' => $order]);
    }
}
