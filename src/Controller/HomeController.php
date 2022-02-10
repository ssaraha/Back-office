<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Intl\Countries;

use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

use App\Data\SearchLove;
use App\Data\FreeRegister;
use App\Form\SearchLoveForm;
use App\Form\FreeRegisterForm;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="app_login")
     */
    public function index(Request $request, AuthenticationUtils $authenticationUtils): Response
    {
        //Login form
        if ($this->getUser()) {
            $this->addFlash('warning', 'Vous êtes déjà connecté');
            return $this->redirectToRoute('app_welcome');
        }
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


        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();
        


        return $this->render('home/index.html.twig', [
                    'title' => 'Site de rencontre gratuit',
                    'searchLoveForm' => $searchLoveForm->createView(),
                    'freeRegisterForm' => $freeRegisterForm->createView(),
                    'last_username' => $lastUsername, 
                    'error' => $error
                ]);
    }
}
