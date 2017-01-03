<?php

namespace App\Http\Controllers\web;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

//require_once 'app/Libraries/user/master_user.php';

use App\Libraries\User\Master_User;
class User extends Master_User
{
	/**
	 * Adding User
	 */
	public function add_user()
	{
		$this->manage_user();
	}
	/**
	 * Search User
	 */
	public function search_user()
	{
		$this->manage_user();
	}
	/**
	 * Edit User
	 */
	public function edit_user()
	{
		$this->manage_user();
	}
	/**
	 * Update User
	 */
	public function update_user()
	{
		$this->manage_user();
	}
}

