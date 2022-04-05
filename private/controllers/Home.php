<?php

class home extends controller{

    //protected $table = 'test';
    public function index()
    {
        $user = $this->load_model('test');

        $data = $user->where("name", "younes");

        $this->view('home', 
        [
            'data' => $data,
        ]);
    }
}