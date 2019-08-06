<?php

/**
 * This file is part of the Chatomz PHP Framework package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author 		Firman Setiawan
 * @copyright	Copyright (c) Firman Setiawan
 *
 */

namespace app\Controllers;

// package untuk class HomeController

use app\Core\Controller; // alias namespace

// Controller class system
class HomeController extends Controller

{
		
 	function __construct()
	{
        
	}

    public function index($value='')
    {
        $this->view('welcome');
    }
}
