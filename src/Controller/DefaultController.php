<?php
// src/Controller/DefaultController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DefaultController extends AbstractController
{
//    /**
//    *@Authorisation
//    */
//    /**
//    *@Registration
//     */
    #[Route('/authorisation', name: 'authorisation')]
    public function auth(): Response
    {
        return $this->render('default/auth.html.twig');
    }
    #[Route('/registration', name: 'registration')]
    public function reg(): Response
    {
        return $this->render('default/reg.html.twig');
    }

}