<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Yaml\Yaml;

class DefaultController extends AbstractController
{
    public function index()
    {
        $organizations = Yaml::parseFile('../public/yaml/organizations.yaml');

        return $this->render('index.html.twig',[
            'title' => 'Test Symfony Yaml',
            'organizations' => $organizations["organizations"]
        ]);
    }
}