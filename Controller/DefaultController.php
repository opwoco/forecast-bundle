<?php

namespace opwoco\ForecastBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('opwocoForecastBundle:Default:index.html.twig', array('name' => $name));
    }
}
