<?php

// main controller class

class controller {

    public function view($view, $data = array()){

        extract($data);

        if(file_exists("../private/views/" .$view. ".view.php")){
            require "../private/views/" .$view. ".view.php";
        }else {
            require "../private/views/404.view.php";
        }
    }
}