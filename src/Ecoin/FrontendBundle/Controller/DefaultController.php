<?php

namespace Ecoin\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('frontendBundle:Default:index.html.twig');
    }
}
