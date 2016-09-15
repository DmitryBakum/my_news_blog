<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class Genius extends Controller
{
    /**
     * @Route("/genius/{geniusName}")
     */
    public function showContent($geniusName)
    {
        return new Response('Hello world: '.$geniusName);
    }
}