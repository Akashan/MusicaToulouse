<?php

namespace MusicaToulouse\WebsiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class WebsiteController extends Controller
{
    public function indexAction()
    {
        return $this->render('MusicaToulouseWebsiteBundle:Website:index.html.twig', array());
    }
}
