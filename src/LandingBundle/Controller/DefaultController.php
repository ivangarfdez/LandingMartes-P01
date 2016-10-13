<?php

namespace LandingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('LandingBundle:Default:index.html.twig');
    }
    public function cocheAction($coche)
    {
        return $this->render('LandingBundle:Default:coche.html.twig',array('coche'=>$coche));
    }
}
