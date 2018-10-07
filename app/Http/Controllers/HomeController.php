<?php
/**
 * Created by PhpStorm.
 * User: Emerson
 * Date: 10/7/2018
 * Time: 11:17 AM
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller {

    /**
     * GET /books
     */
    public function index()
    {
        return 'Here are all the home page features...';
    }
}