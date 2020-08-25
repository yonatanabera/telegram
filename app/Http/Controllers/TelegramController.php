<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Telegram; 
class TelegramController extends Controller
{
    //

    public function index(){
        $content=Telegram::getUpdates();
        return $content; 
    }
}
