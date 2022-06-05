<?php

namespace App\Controller;

use App\Entity\FeatureCollection;
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
        $bears = $BearRepository->findBy(array('col2' => $query));    
//         $bears = $BearRepository->createQueryBuilder('bear')
//         ->select('*')
//         // ->where('bear.col2 LIKE \'%Utrech%\'')
//         ->where('bear.col2 = \'Utrech\'')
//     ->getQuery()
//    ->getResult();
                
//    ->where('column_name3 LIKE %search_key%')
//    ->execute();

//         $bears = Doctrine::getTable('User')->createQuery('u')
//   ->where('col2 LIKE ?', '%test%')
//   ->execute();

        // $bears = $BearRepository->findAll();    
        return $this->render('search/result.html.twig', [
            'data' => $bears,
            'query' => $query
        
        ]);
    }
}


