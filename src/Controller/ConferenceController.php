<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ConferenceController extends AbstractController
{
    /**
     * @Route("/hello/{name}", name="homepage")
     * @param string $name
     * @return Response
     */
    public function index(string $name)
    {
        $greet = '';
        if ($name) {
            $greet = htmlspecialchars($name);
        }
        return $this->render('conference/index.html.twig', [
            'greet' => $greet,
        ]);
    }
}
