<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\BrowserKit\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class AjaxController extends AbstractController
{
    #[Route('/ajax/handle-request', name: 'app_ajax')]
    public function handleRequest(Request $request)
    {
        // Handle the AJAX request and return a JSON response
        $response = array('message' => 'AJAX request handled successfully');
        return new JsonResponse($response);
    }
}
