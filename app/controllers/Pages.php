<?php

class Pages extends Controller {
  public function __construct() {

  }

  public function index() {
    if(isLoggedIn()){
      redirect('posts');
    }
    $data = [
      'title' => 'CRUD&APP',
      'description' => 'Simple App built on the my own MVC PHP framework'
    ];

    $this->view('pages/index', $data);
  }


  public function about() {
    $data = [
      'title' => 'About us',
      'description' => 'App to share posts'
    ];

    $this->view('pages/about', $data);
  }
}
