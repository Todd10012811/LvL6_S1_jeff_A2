<?php

    include(APPROOT . '/helper/helperfunctions.php');

    class Pages extends Controller {

      public function __construct() {
        $this->_page = $this->model('_content'); //name your model
        //$this->people = $this->model('People');
      }
      public function index() {

        // variables for data or model functions go here
        $title = $this->_page->title();
        $paragraph = $this->_page->paragraph();
        $image = "http://placekitten.com/200/200";

        // add data or variables to the array using key-value pairs
        $data = [
          'title' => $title,
          'paragraph' => $paragraph,
          'img' => $image
        ];

        //$data['title2'];

        // call your view 
        // $this->view('folder/file', $data); //file extension not needed - if a file is not in a folder, don't point one
        $this->view('pages/template_home', $data);
      }
      public function products(){
        $title = $this->_page->title();
        $paragraph = $this->_page->paragraph();
        $image = "http://placekitten.com/200/200";

        $data = [
          'title' => $title,
          'paragraph' => $paragraph,
          'img' => $image
        ];

        $this->view('pages/template_products', $data);

      }
      public function legislation(){
        $title = $this->_page->title();
        $paragraph = $this->_page->paragraph();
        $image = "http://placekitten.com/200/200";

        $data = [
          'title' => $title,
          'paragraph' => $paragraph,
          'img' => $image
        ];

        $this->view('pages/template_legislation', $data);

      }
      public function contact(){
        $title = $this->_page->title();
        $paragraph = $this->_page->paragraph();
        $image = "http://placekitten.com/200/200";

        $data = [
          'title' => $title,
          'paragraph' => $paragraph,
          'img' => $image
        ];

        $this->view('pages/template_contact', $data);

      }
    }
