<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController
{
    #[Route('/', name: 'blog_list')]
    public function homepage()
    {
        return new Response("Response sent"); // Controller function always needs to return a response
    }

    #[Route('/questions/{slug}')]
    public function show($slug)
    {
        return new Response(sprintf(
            'Future page to show the question "%s" !', ucwords(str_replace('-', ' ', $slug))
        ));
    }
} 