<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Address;

class CheckoutController extends Controller
{

    public function checkout(){
       return redirect('/checkout');
    }

    public function index(Request $req){
        $userId=$req->session()->has('userId');
        if($userId){
        $countAddres=0;
        $Address=Address::where('user_id',$userId)->with('user')->get();
        $countAddres=count($Address);
        $addrActive=Address::where('user_id',$userId)->where('active',1)->first();
        return view('user.pages.checkout',['address'=>$Address,'countAddres'=>$countAddres,'addrActive'=>$addrActive]);
        }else{
           return redirect('/');
        }
    }

}
