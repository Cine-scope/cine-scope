<?php

namespace App\Controller;

use App\Repository\PlatformeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class PlatformeController extends AbstractController
{
    #[Route('/platformes', name: 'app_platforme')]
    public function index(PlatformeRepository $pr): Response
    {
        $platformes = $pr->findAll();
        dd($platformes);
        return $this->render('platforme/index.html.twig', [
            'controller_name' => 'PlatformeController',
        ]);
    }
}
