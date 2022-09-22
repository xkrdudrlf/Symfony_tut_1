<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/*
    AbstractController class gives 
*/
class QuestionController extends AbstractController
{
    #[Route('/', name: 'blog_list')]
    public function homepage()
    {
        return new Response("Response sent"); // Controller function always needs to return a response
    }

    #[Route('/questions/{slug}')]
    public function show($slug)
    {
        $answers = [
            'Make sure your cat is sitting purrrfectly still',
            'Honestly, I like furry shoes better than MY cat',
            'Maybe.. try saying the spell backwards?',
        ];

        /*
            render(string: 'path of the template', array: list of variables we want to pass to the template)
        */
        return $this->render('question/show.html.twig',[
            'question' => ucwords(str_replace('-', ' ', $slug)),
            'answers' => $answers,
        ]);
    }
} 