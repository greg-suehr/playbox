<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class SiteController extends AbstractController
{
  #[Route('/sitemap', name: 'app_sitemap')]
  public function index(): Response
  {
        return $this->render('site/index.html.twig', [
          'controller_name' => 'SiteController',
        ]);
  }
  
  #[Route('/home', name: 'app_home')]
  public function home(): Response
  {
        return $this->render('site/home.html.twig', [
          'controller_name' => 'SiteController',
        ]);
  }

  #[Route('/about', name: 'app_about')]
  public function about(): Response
  {
        return $this->render('site/about.html.twig', [
          'controller_name' => 'SiteController',
        ]);
  }

  #[Route('/classes', name: 'app_classes')]
  public function classes(): Response
  {
        return $this->render('site/classes.html.twig', [
          'controller_name' => 'SiteController',
        ]);
  }

  #[Route('/shows', name: 'app_shows')]
  public function show(): Response
  {
        return $this->render('site/shows.html.twig', [
          'controller_name' => 'SiteController',
        ]);
  }  
        
}
