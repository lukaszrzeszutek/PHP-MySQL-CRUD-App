<?php

class Pages extends Controller {
  public function __construct() {

  }

  public function index() {
    $data = [
      'title' => 'SharePosts',
      'description' => 'Simple App built on the MVC PHP framework'
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
