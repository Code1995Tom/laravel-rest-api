<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Artisan;

class ResetController extends Controller
{
    public function reset()
    {
        Artisan::call('migrate:fresh');

        return 'OK'; //Status code is 200
    }
}
