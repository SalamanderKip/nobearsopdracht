<?php

namespace App\Controller;

use App\Repository\BearRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SearchController extends AbstractController
{
    #[Route('/search', name: 'app_search')]
    public function index(BearRepository $BearRepository): Response
    {
        $query = $_GET["q"];
        
        $criteria = new \Doctrine\Common\Collections\Criteria();
        $criteria
          ->orWhere($criteria->expr()->contains('col1', $query))
          ->orWhere($criteria->expr()->contains('col2', $query));
        
        $groups = $BearRepository->matching($criteria);

        return $this->render('search/result.html.twig', [
            'data' => $groups,
            'query' => $query
        ]);
    }
}
