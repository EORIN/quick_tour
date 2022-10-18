<?php
// src/Controller/DefaultController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DefaultController extends AbstractController
{
    /**
    *@Route("/hello/{name}")
    */

    public function index($name): Response
    {
        return $this->render('default/index.html.twig', [
                        'name' => $name,
                    ]);
    }
}