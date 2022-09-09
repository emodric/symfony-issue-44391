<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/hello')]
final class Hello extends AbstractController
{
    public function __invoke(): Response
    {
        $isGranted = $this->isGranted('ROLE_USER');

        return new Response($isGranted ? 'OK' : 'NOT OK');
    }
}
