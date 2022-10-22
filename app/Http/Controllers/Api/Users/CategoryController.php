<?php

namespace App\Http\Controllers\Api\Users;

use App\Http\Controllers\Controller;
use App\Models\User;

class CategoryController extends Controller
{
    public function index(User $user)
    {
        return $user->categories()->paginate();
    }
}
