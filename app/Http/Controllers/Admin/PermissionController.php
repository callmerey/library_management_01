<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    public function edit($user_id){
        $permission = Permission::get();
        $roles = Role::get();
        $user_data = User::where('id',$user_id)->get();
        return view('Admin.Permisson.permisson',compact('permission','user_data','roles'));
    }
}
