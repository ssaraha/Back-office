<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Intl\Countries;

use App\Data\SearchLove;
use App\Data\FreeRegister;
use App\Form\SearchLoveForm;
use App\Form\FreeRegisterForm;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="app_home")
     */
    public function index(Request $request): Response
    {
        //Form search love
        $searchLove = new SearchLove;
        $searchLoveForm = $this->createForm(SearchLoveForm::class, $searchLove);
        $searchLoveForm->handleRequest($request);

        if( $searchLoveForm->isSubmitted() && $searchLoveForm->isValid() )
        {
            dd($searchLoveForm->getData());
        }

        //Go to register form
        $freeRegister = new FreeRegister();
        $freeRegisterForm = $this->createForm(FreeRegisterForm::class, $freeRegister);
        $freeRegisterForm->handleRequest($request);
        if ( $freeRegisterForm->isSubmitted() && $freeRegisterForm->isValid() ) {
           dd($freeRegisterForm->getData()); 
        }


        return $this->render('home/index.html.twig', [
                    'title' => 'Site de rencontre gratuit',
                    'searchLoveForm' => $searchLoveForm->createView(),
                    'freeRegisterForm' => $freeRegisterForm->createView()
                ]);
    }
}
