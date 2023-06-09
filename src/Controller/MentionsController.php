<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MentionsController extends AbstractController
{
    #[Route('/mentions', name: 'app_mentions_index')]
    public function index(TranslatorInterface $translator): Response
    {
        return $this->render('default/mentions.html.twig', [
            'controller_name' => $translator->trans('Hello!'),
        ]);
    }
}
