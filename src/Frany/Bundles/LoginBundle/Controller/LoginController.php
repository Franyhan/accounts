<?php

namespace Frany\Bundles\LoginBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LoginController extends Controller
{
    public function registerAction()
    {
        return $this->render('FranyBundlesLoginBundle:Login:register.html.twig');
    }
}
