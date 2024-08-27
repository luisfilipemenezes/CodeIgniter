<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Restrict extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Carregar o model no construtor para garantir que ele esteja disponível para todos os métodos
        $this->load->model('Users_model');
    }

    public function index() {
        // Obter dados do usuário
        $user_data = $this->Users_model->get_user_data("LUIS");
        
        // Passar os dados para a view
        $data = array(
            'user_data' => $user_data,
            'scripts' => array(
                'util.js',
                'login.js'
            )
        );
        $this->template->show('login', $data);
    }
}
