<?php

namespace GUI\AnnoncesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AnnonceController extends Controller
{
    public function indexAction()
    {
        return $this->render('GUIAnnoncesBundle:Annonce:index.html.twig');
    }
}
