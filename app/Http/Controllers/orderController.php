<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\order;
class orderController extends Controller
{
    public function index()
    {
        return view('add-order-info');
    }
    public function store(Request $request)
    {
        $order = new Order;
        $order->city = $request->city;
        $order->district = $request->district;
        $order->street = $request->street;
        $order->building_number = $request->building_number;
        $order->phone_number = $request->phone_number;
        $order->delivery_time = $request->delivery_time;
        $order->save();
        return redirect('add-order-info')->with('status', 'order info Has Been inserted');
    }
}
