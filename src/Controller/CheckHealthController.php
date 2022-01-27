<?php

namespace App\Controller;

use App\Service\CheckHealthService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CheckHealthController extends AbstractController
{
    /**
     * @Route("/api/health", name="check_health", methods={"GET"})
     */
    public function getHealthStatus(CheckHealthService $healthService)
    {
        return $this->json([
            'APP_ENV' => $healthService->env()
        ]);
    }
}
