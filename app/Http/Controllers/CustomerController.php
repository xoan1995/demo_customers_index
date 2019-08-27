<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
public function index(){
    //tao mang khach hang
    $customers=[
        '0'=>['id'=>1,
            'name'=>'Pham Nhat Anh',
            'bod'=>'1998-04-03',
            'email'=>'customer1@gmail.com'],
        '1'=>['id'=>2,
        'name'=>'Bui Thanh Ha',
        'bod'=>'1998-06-22',
        'email'=>'Thanha@gmail.com'],
        '2'=>['id'=>3,
            'name'=>'Tran Bao Nam',
            'bod'=>'1998-07-20',
            'email'=>'nam1998@gmail.com']
    ];

    //goi view va truyen du lieu sang view
    return view('customers.list', compact('customers'));
}
}
