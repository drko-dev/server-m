<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class IndexController extends Controller
{
    /**
    * @Route("/") 
    */

    public function index()
    {
        var_dump('okkk');
        return new Response('ok');
    }
}