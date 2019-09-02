<?php

namespace App\Http\Controllers;

use \http\Env\Response;
use \Illuminate\Http\Request;
use \Illuminate\Support\Facades\DB;
use \Illuminate\Support\Facades\Hash;

class NavigationController extends Controller
{
    /**
     * @param Request $request
     * @return Response
     */
    public function navigation(Request $request)
    {
        $validation = $this->validate($request, [

        ]);

        $this->addMessage('warning','Test message');

        return $this->getResponse();
    }
}
