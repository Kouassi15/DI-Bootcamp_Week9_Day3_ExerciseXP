<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class UserController extends AbstractController
{
    #[Route('/user', name: 'app_user')]
    public function index(): Response
    {
        return $this->render('user/index.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }

    #[Route('/user/new', name: 'app_user_new')]
    public function createUser(Request $request, ValidatorInterface $validator)
    {
        $user = new User();
        $user->setUsername($request->request->get('username'));
        $user->setEmail($request->request->get('email'));
        $user->setPassword($request->request->get('password'));

        $errors = $validator->validate($user);

        if (count($errors) > 0) {
            return $this->render('user/new.html.twig', [
                'errors' => $errors,
            ]);
        }

        // Save user to database...
    }

}
