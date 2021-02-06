<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;

class BalanceController extends Controller
{
    public function show($id)
    {
        //$accountId = $request->input('id');
        $account = Account::findOrFail($id);
        return $account->balance;
    }
}
