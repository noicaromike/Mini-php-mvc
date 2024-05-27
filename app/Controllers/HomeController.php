<?php

namespace App\Controllers;

use App\Controller;
use App\Models\Users;

class HomeController extends Controller
{

    private $homeModel;
    public function __construct()
    {
        $this->homeModel = new Users;
    }
    public function index()
    {
        $users = $this->homeModel->getAllUsers();

        $this->render('index', ['users' => $users]);
    }
}
