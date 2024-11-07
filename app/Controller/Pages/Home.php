<?php

namespace App\Controller\Pages;

use \App\Utils\View;
use \App\Model\Entity\Organization;

class Home extends Page {
    public static function getHome() {
        $ob_organization = new Organization;
        // view da home
        $content = View::render('pages/home', [
            'name' => $ob_organization->name,
            'description' => $ob_organization->description,
            'site' => $ob_organization->site
        ]);

        // retorna a view e o título da página
        return parent::getPage('Estudando MVC', $content);
    }
}