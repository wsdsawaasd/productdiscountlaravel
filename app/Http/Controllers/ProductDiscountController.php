<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductDiscountController extends Controller
{
    public function showCalculate(){
        return view("123");
    }
    public function calculate(Request $request) {
        $desc = $request->Description;
        $price = $request->Price;
        $discount = $request->Discount;
        $discountAmount = $price * $discount * 0.01;
        $discountPrice = $price  - $discountAmount ;
        return view("456",compact(['desc', 'price', 'discount', 'discountAmount', 'discountPrice']));
    }
}
