<?php

class Home extends controller{

    //protected $table = 'test';
    public function index()
    {
        
        Auth::logout();
        $this->redirect('login');
        
    }
}