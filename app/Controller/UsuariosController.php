<?php
class UsuariosController extends AppController {
    public $helpers = array('Html', 'Form');
    
    var $name = 'Usuarios';
    
    function index() {
        
        $this->set('usuarios', $this->Usuario->find('all'));
        
    }
    
    
    
}