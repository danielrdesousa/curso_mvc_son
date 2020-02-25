<?php

namespace App\Controllers;

use SON\Controller;
use App\Models\User;

class UsersController extends Controller
{
    // protected $table = 'users';

    public function index(User $model)
    {
        $users = $this->model->all();
        return $users;
    }

    public function create()
    {
        return $this->render(['title' => 'Register User']);
    }
}