<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use App\Models\AdminUser;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\Controller;

class AdminUserController extends Controller
{
    public function index()
    {
        return view('backend.admin_user.index');
    }

    public function ssd(){
        $data=AdminUser::query();

        return DataTables::of($data)->make(true);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
