<?php
  class Pages extends Controller {
    public function __construct(){

    }
    
    public function index(){
      
      $data = [
        'title' => 'Welcome To PHP MVC',
        'description' => 'Core framework is done!, Focus on your app!'
      ];
     
      $this->view('pages/index', $data);
    }

    public function about(){
      $data = [
        'title' => 'About Page Example'
      ];

      $this->view('pages/about', $data);
    }
  }