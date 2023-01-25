<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class AppController extends AbstractController{
   /**
    * @Route("/")
    */
    public function index(){
        $users = ['amgad','manaar'];
        return  $this->render('home.html.twig',['users' => $users]);
    }
}