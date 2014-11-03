<?php

class LoginController extends BaseController {

    public function getIndex() {
        $data = array(
            'actionUrl' => URL::to('login/login')
        );
        return View::make('backend.login.index', $data);
    }

    public function postLogin() {
        $email = Input::get('email');
        $password = Input::get('password');
        if (Auth::attempt(array('email' => $email, 'password' => $password))) {
            return Redirect::to('backend/user');
        }else{
            return Redirect::to('login')->with('error', 'Kombinasi email dan Password Salah');
        }
    }

}
