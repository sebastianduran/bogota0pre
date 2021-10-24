<?php

namespace Drupal\pruebabogota\Controller;

class PruebaController {
    public function page(){

        $items = array (
            array('name' => ' Article one'),
            array('name' => ' Article two'),
            array('name' => ' Article three'),
            array('name' => ' Article four'),
            array('name' => ' Article five'),
        );

        return array(
            '#theme' => 'article_list',
            '#items' => $items,
            '#title' => 'lista de titutlos' 
        );
    }
}