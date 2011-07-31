<?php

namespace Cluddy\WelcomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
       return $this->render('CluddyWelcomeBundle:Default:index.html.twig', array('name' => $name));
	//return $this->render('AcmeHelloBundle:Hello:layout.html.twig', array('name' => $name));
    }
}
