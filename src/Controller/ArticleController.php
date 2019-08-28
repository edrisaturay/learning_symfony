<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ArticleController{
    
    /**
     * @Route("/")
     */
    public function homepage(){
        return new Response("OMG my first page already: whooooo!");
    }

    /**
     * @Route("/news/{slug}")
     */
    public function show($slug){
        return new Response("Feature page to show one space article " . $slug);
    }
}