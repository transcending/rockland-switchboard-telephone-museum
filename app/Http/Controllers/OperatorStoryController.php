<?php
/**
 * Created by PhpStorm.
 * User: Emerson
 * Date: 10/7/2018
 * Time: 11:19 AM
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OperatorStoryController extends Controller {

    /**
     * GET /operatorstories
     */
    public function index()
    {
        return 'Here are all the operator stories...';
    }
}