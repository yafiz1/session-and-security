<?php namespace App\Models;

use CodeIgniter\Model;

class Login extends Model{

	public function getData()
	{
		$db = \Config\Database::connect();
        $builder = $db->table("petugas");
        return $builder->get()->getResult();
	}

    public function login($data)
    {
        $db = \Config\Database::connect();
        $builder = $db->table("petugas");
        $builder->where("nama_petugas",$data['nama_petugas']);
        $builder->where("password",$data['password']);
        return $builder->get();
    }

	public function register($data)
    {
        $db = \Config\Database::connect();
        $builder = $db->table("petugas");
        return $builder->insert($data);
    }

}



