<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserMainController extends AbstractController
{
    /**
     * @Route("/user/main", name="user_main")
     */
    public function index(): Response
    {
        return $this->render('user_main/index.html.twig', [
            'controller_name' => 'UserMainController',
        ]);
    }
}
