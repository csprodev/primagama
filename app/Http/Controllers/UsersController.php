<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
    	$users = [
			'0' => [
				'first_name' => 'dika'
			],
			'1' => [
				'first_name' => 'rahman'
			],
			'2' => [
				'first_name' => 'budi'
			]
		];
		return view('users.index', compact('users'));
    }

    public function create()
    {
    	return 'create';
    }
}
