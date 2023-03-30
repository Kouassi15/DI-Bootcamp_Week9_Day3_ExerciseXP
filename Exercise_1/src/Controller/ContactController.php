<?php

namespace App\Controller;

use App\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact", methods={"GET", "POST"})
     */
    public function index(Request $request)
    {
        $form = $this->createForm(ContactType::class);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            
        }
        
        $controllerName = 'contact';
        return $this->render('contact/index.html.twig', [
            'controller_name' => $controllerName,
            'form' => $form->createView()
        ]);        
    }
}
