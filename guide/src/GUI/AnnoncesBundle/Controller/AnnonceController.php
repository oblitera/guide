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
    	$redis = $this->get('snc_redis.default');
    	$cache = $redis->get('voir');
    	return new Response($cache); 

    	/*$reponse = $this->render('GUIAnnoncesBundle:Annonce:voir.html.twig');
    	$redis = $this->get('snc_redis.default');
    	$redis->set("voir",$reponse->getContent());*/

        //return $this->render('GUIAnnoncesBundle:Annonce:voir.html.twig');    	
    }
}
