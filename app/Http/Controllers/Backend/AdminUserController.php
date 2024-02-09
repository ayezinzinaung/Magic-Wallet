<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use App\Models\AdminUser;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

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
        return view('backend.admin_user.create');
    }

    public function store(Request $request)
    {
        $admin_user = new AdminUser();
        $admin_user -> name = $request->name;
        $admin_user -> email= $request->email;
        $admin_user -> phone= $request->phone;
        $admin_user -> password = Hash::make($request->password);
        $admin_user -> save();

        return redirect()->route('admin.admin-user.index')->with('create', 'Successfully Created.');
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
