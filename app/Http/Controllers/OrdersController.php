<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function index()
    {


        $orders = Orders::all();
        return response()->json($orders, 200);
    }
}
