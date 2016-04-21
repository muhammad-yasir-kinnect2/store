<?php
/**
 * Created by   :  Muhammad Yasir
 * Project Name : packeges
 * Product Name : PhpStorm
 * Date         : 21-Apr-16 1:31 PM
 * File Name    : StoreController.php
 */

namespace Pasha\Store\Htpp\Controllers;

use Illuminate\Routing\Controller;

class StoreController extends Controller
{
    public function index() {
        return view('Store::index');
    }
}
