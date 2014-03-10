<?php

namespace Shorty\FirstBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{

    public function indexAction($name)
    {
        return $this->render('FirstBundle:Default:index.html.twig', array('name' => $name));
    }

    public function testAction()
    {
        return $this->render('FirstBundle:Test:index.html.twig');
    }

    public function formAction()
    {
        return $this->render('FirstBundle:Form:index.html.twig');
    }

}
