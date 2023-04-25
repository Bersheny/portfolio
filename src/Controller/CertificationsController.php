<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/certifications')]
class CertificationsController extends AbstractController
{
    #[Route('/', name: 'app_certifications_index')]
    public function index(TranslatorInterface $translator): Response
    {
        return $this->render('default/certifications.html.twig', [
            'controller_name' => $translator->trans('Hello!'),
        ]);
    }
}
