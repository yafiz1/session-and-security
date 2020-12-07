<?php namespace App\Controllers;

class Login extends BaseController
{
	public function index()
	{
		helper('form');
		return view('Login/index.php');
	}

	public function register()
	{
		helper('form');
		return view('Login/register.php');
	}

	public function Login()
	{
		helper('form');
		$model = model('Login');
		$data = [
			'nama_petugas' => $this->request->getPost('username'),
			'password' => sha1($this->request->getPost('password'))
		];
		$res = $model->login($data);
		if ($res->connID->affected_rows == 1) {
			$data = ['auth' => 1];
			return view('Login/index.php', $data);
		}else{
			$data = ['auth' => 0];
			return view('Login/register.php', $data);
		}
	}

	public function registerAccount()
	{
		helper('form');
		$model = model('Login');
		$data = [
			'nama_petugas' => $this->request->getPost('username'),
			'jabatan' => "pustakawan",
			'password' => sha1($this->request->getPost('password'))
		];
		$res = $model->register($data);
		if ($res->connID->affected_rows == 1) {
			return view('Login/index.php');
		}else{
			return view('Login/register.php');
		}
	}

	//--------------------------------------------------------------------

}
