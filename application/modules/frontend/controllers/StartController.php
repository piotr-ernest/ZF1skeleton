<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of StartController
 *
 * @author rnest
 */
class StartController extends CloutWork_Controller_Action
{
    public function init()
    {
        parent::init();
    }
    
    public function indexAction()
    {
        
        if($this->getRequest()->isPost()){
            $data = [];
            
            $form = new Frontend_Form_Test();
            
            $this->view->selector = array('-- Wybierz imię --', 'Kornelia', 'Klaudia', 'Karolina', 'Kamila');
                   
            $data['txt1'] = isset($_POST['txt1']) ? $_POST['txt1'] : '';
            $data['selector'] = isset($_POST['selector']) ? $this->view->selector[$_POST['selector']] : '';
            
            $form->setDefaults($data);
            
            if($form->isValid($data)){
                
                $this->view->success = true;
                $this->view->text = 'Formularz został wysłany pomyślnie.';
                
            } else {
                $this->view->errors = true;
                $this->view->textErrors = $form->getErrors();
                
            }
            desc($data, 0, 'data');
            desc($_POST, 0, 'post');
            
        }
    }
    
}
