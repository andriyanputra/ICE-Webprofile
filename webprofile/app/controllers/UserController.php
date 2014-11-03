<?php

class UserController extends BaseController{
    public function getIndex(){
        $data = array(
            'title' => 'Dashboard'
        );
        return View::make('backend.user.index', $data);
    }
    
    public function getCreate(){
        $data = array(
            'title' => 'Tambah Pengguna',
            'actionUrl' => URL::to('admin/user/create'),
            'userRole' => UserRole::all(),
        );
        return View::make('admin.user.create', $data);
    }
    
    public function postCreate(){
        $user = new User();
        $user->name = Input::get('nama');
        $user->email = Input::get('email');
        $user->password = Hash::make(Input::get('password'));
        $user->role_id = Input::get('user_role');
        $user->save();
        
        return Redirect::to('admin/user/create')->with('success','User berhasil dibuat');
    }
    
    public function getList(){
        $data = array(
            'title' => 'Daftar Pengguna',
            'pengguna' => User::all()
        );
        Return View::make('admin.user.list', $data);
    }
}

