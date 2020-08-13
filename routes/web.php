<?php


use Illuminate\Http\Request;
Route::get('/chat', function () {
  return view('chat');
})->where('any', '.*');


Use App\Model\Customer;
Use App\Model\Address;

Route::get('/customer_data',function(Request $request){

  // $address =Address::find($request->client_id);
 
  // return $address->customer;

    $customers =Customer::with('addresses')->find($request->client_id);
 
    return $customers;


});