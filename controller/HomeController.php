<?php

class HomeController {
    private $url;
    private $page;
    function __construct($key,$api){
        $this->page = $key;
        if(array_key_exists($key,$api)){
            $this->url = $api[$key];
        }   
        else $this->url =  $api['home'];
    }

    function getPage(){
        $json = file_get_contents($this->url);
        $data = json_decode($json, true)['data'];
        //print_r($data); die;
        //echo count($data); die;
        if($this->page == 'home')
            $page = 'view/index.php';
        else $page = 'view/page.php';
        require_once 'view/layout.php';
    }
}

?>