<?php

namespace Frany\Bundles\LoginBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    public function homeAction()
    {
        return $this->render('FranyBundlesLoginBundle:Home:home.html.twig');
    }
}
