<?php

namespace App\Controller;

use App\Entity\Product;
use App\Form\ProductType;
use App\Repository\ProductRepository;
use App\Entity\Vacancy;
use App\Form\VacancyType;
use App\Repository\VacancyRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserMainController extends AbstractController
{
    /**
     * @Route("/user/main", name="user_main")
     */
    public function index(ProductRepository $productRepository, VacancyRepository $vacancyRepository): Response
    {
        $products  = $productRepository->findAll();
        $vacancies = $vacancyRepository->findAll();
        return $this->render('user_main/index.html.twig', [
            'controller_name' => 'UserMainController',
            'products' => $products,
            'vacancies' => $vacancies
        ]);
    }
}
