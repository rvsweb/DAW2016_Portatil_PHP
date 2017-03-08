<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Hola_mundo extends CI_Controller {

  /**
   * Index Page for this controller.
   *
   * Maps to the following URL
   * 		http://example.com/index.php/welcome
   * 	- or -
   * 		http://example.com/index.php/welcome/index
   * 	- or -
   * Since this controller is set as the default controller in
   * config/routes.php, it's displayed at http://example.com/
   *
   * So any other public methods not prefixed with an underscore will
   *         /index.php/mi_clase/metodo/parametros
   * map to /index.php/welcome/<method_name>
   * @see https://codeigniter.com/user_guide/general/urls.html
   */
  public function index() {
    $this->load->view('hola_mundo_view');
  }
  
  /**
   * 
   */
  public function set_view() {
    $this->load->view('hello_friend_view');
  }

  /**
   * Soy un metodo que ejecuta una vista
   */
  public function set_view1() {
    $this->load->view('mi_vista');
  }

}