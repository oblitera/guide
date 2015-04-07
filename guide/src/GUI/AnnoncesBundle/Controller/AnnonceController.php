<?php

namespace GUI\AnnoncesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class AnnonceController extends Controller
{
    public function indexAction()
    {
        return $this->render('GUIAnnoncesBundle:Annonce:index.html.twig');
    }

    public function voirAction()
    {
        return $this->render('GUIAnnoncesBundle:Annonce:voir.html.twig');    	
    }

    public function formulaireprestationAction()
    {
        return $this->render('GUIAnnoncesBundle:Annonce:formulaireprestation.html.twig');       
    }
}
