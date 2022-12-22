<?php

/**
 * @file
 * Contains \Drupal\current_date\Controller\HelloWorldController.
 */



namespace Drupal\current_date\Controller;
use Drupal\Core\Controller\ControllerBase;


class HelloWorldController extends ControllerBase {
    public function content() {
        return [
            '#theme' => 'hello-world-template',
            /* '#test_var' => $this->t('Test Value'), */
        ];
    }  
}