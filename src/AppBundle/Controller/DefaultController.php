<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction($name)
    {
        // replace this example code with whatever you need
        return $this->render(
            'AppBundle:Front:index.html.twig',
            array('name' => $name)
        );
    }
}
