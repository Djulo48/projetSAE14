<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PortfolioxController extends AbstractController
{
    /**
     * @Route("/portfoliox", name="portfoliox")
     */
    public function index(): Response
    {
        return $this->render('portfoliox/index.html.twig', [
            'controller_name' => 'PortfolioxController',
        ]);

    }
  /**
     * @Route("/accueil", name="accueil")
     */
    public function accueil(): Response
    {
        return $this->render('portfoliox/accueil.html.twig', [
            'controller_name' => 'PortfolioxController',
        ]);
    }      
    /**
     * @Route("/cv", name="cv")
     */
    public function cv(): Response
    {
        return $this->render('portfoliox/cv.html.twig', [
            'controller_name' => 'PortfolioxController',
        
        ]);
     }
      /**
     * @Route("/portfolio", name="portfolio")
     */
    public function porfolio(): Response
    {
        return $this->render('portfoliox/portfolio.html.twig', [
            'controller_name' => 'PortfolioxController',

        ]);
    }
     /**
     * @Route("/loisirs", name="loisirs")
     */
    public function loisirs(): Response
    {
        return $this->render('portfoliox/loisirs.html.twig', [
            'controller_name' => 'PortfolioxController',

        ]);
    }
        /**
     * @Route("/ensavoir", name="ensavoir")
     */
    public function ensavoir(): Response
    {
        return $this->render('portfoliox/ensavoir.html.twig', [
            'controller_name' => 'PortfolioxController',

        ]);
    }
            
        

}
