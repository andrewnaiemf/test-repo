<?php

namespace App\Http\Controllers;
use App\Http\Controllers\AppBaseController;

use Illuminate\Http\Request;

use App\Models\Customer;
use Auth;

class ChatsController extends AppBaseController
{
    //



/**
 * Show chats
 *
 * @return \Illuminate\Http\Response
 */


/**
 * Fetch all messages
 *
 * @return Message
 */


public function get_client_info(Request $request)
{
  $customer = Customer::find($request->client_id);
 

  return $customer;
}

}