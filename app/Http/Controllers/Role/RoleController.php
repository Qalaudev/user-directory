<?php

namespace App\Http\Controllers\Role;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        return view('roles.index',compact('roles'));
    }

    public function create()
    {
        return view('roles.create');
    }

    public function store(Request $request)
    {
        $role = $request->validate([
            'name' => 'required|unique:roles,name|max:255',
            'code' => 'required|unique:roles,code|max:255',
        ]);

        Role::create($role);
        return redirect()->route('roles.index')->with('success', 'Рөл сәтті қосылды!');
    }
    public function edit(Role $role)
    {
        return view('roles.edit', compact('role'));
    }

    public function update(Request $request, Role $role)
    {
        $request->validate([
            'name' => 'required|unique:roles,name,' . $role->id . '|max:255',
            'code' => 'required|max:255'
        ]);

        $role->update([
            'name' => $request->name,
            'code' => $request->code
        ]);
        return redirect()->route('roles.index')->with('success', 'Рөл сәтті жаңартылды!');
    }
    public function destroy(Role $role)
    {
        $role->delete();
        return redirect()->route('roles.index')->with('success', 'Рөл сәтті жойылды!');
    }
}
