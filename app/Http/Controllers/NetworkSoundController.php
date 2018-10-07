<?php
/**
 * Created by PhpStorm.
 * User: Emerson
 * Date: 10/7/2018
 * Time: 11:18 AM
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NetworkSoundController extends Controller {

    /**
     * GET /networksounds
     */
    public function index()
    {
        return 'Here are all the network sounds...';
    }
}