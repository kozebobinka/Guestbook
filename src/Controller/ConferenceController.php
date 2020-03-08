<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ConferenceController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     * @param string $name
     * @return Response
     */
    public function index()
    {

        return $this->render('conference/index.html.twig', [
            'greet' => 'world',
        ]);
    }
}
