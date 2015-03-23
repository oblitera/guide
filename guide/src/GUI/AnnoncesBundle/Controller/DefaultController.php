<?php

namespace GUI\AnnoncesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('GUIAnnoncesBundle:Default:index.html.twig', array('name' => $name));
    }
}
