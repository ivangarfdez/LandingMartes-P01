<?php

namespace LandingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('LandingBundle:Default:index.html.twig');
    }
    public function ferrariAction()
    {
        return $this->render('LandingBundle:Default:ferrari.html.twig');
    }
    public function lamboAction()
    {
        return $this->render('LandingBundle:Default:lambo.html.twig');
    }
}
