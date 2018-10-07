<?php
/**
 * Created by PhpStorm.
 * User: Emerson
 * Date: 10/7/2018
 * Time: 11:17 AM
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller {

    /**
     * GET /events
     */
    public function index()
    {
        return 'Here are all the events...';
    }
}