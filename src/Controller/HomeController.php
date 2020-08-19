<?php 

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController  {

    /**
     * Affiche la page d'accueil
     *
     * @Route("/", name="homepage")
     * 
     * @return Response
     */
    public function home()
    {
        return $this->render(
            'home.html.twig'
        );
    }
}
