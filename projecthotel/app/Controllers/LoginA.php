<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class LoginA extends BaseController
{
    public function login()
    {
        return view(name: 'layouts/header').
        view(name: 'layouts/navbar').
        view(name: 'login/loginAdmin').
        view(name: 'layouts/footer');
    }
}
