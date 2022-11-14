<?php

namespace App\Controller;


use App\Service\CallApiService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AppController extends AbstractController
{
    #[Route('/', name: 'app_app')]
    public function index(CallApiService $callApiService): Response
    {
        $callApiService->getCurrencyData();
        return $this->render('app/index.html.twig', [
            'datas' => $callApiService->getCurrencyData(),
        ]);
    }
}
