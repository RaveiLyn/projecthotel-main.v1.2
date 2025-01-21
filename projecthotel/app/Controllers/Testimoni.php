<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Testimoni extends BaseController
{
    public function testimoni()
    {
        return view(name: 'layouts/header').
        view(name: 'layouts/navbar').
        view(name: 'testimoni/testimoniPage').
        view(name: 'layouts/footer');
    }
}
