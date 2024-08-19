<?php

namespace App\Controller\Pages;

use \App\Utils\View;

class Home extends Page {
    public static function getHome() {
        // view da home
        $content = View::render('pages/home', [
            'name' => 'Guilherme',
            'description' => 'Front-end to Back-end'
        ]);

        // retorna a view e o título da página
        return parent::getPage('Estudando MVC', $content);
    }
}