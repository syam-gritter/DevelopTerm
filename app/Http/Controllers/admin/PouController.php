<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PouController extends Controller
{
    public function create()
    {
        view('admin.pou.create');
    }
    
    public function add()
    {
        redirect('admin/pou/creste');
    }
    
    public function edit()
    {
        view('admin.pou.edit');
    }
    
    public function update()
    {
        redirect('admin/pou/edit');
    }
}
