<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

/*
    AbstractController class gives 
*/
class QuestionController extends AbstractController
{
    /**
     * @Route("/", name="app_homepage")
     */
    public function homepage(Environment $twigEnvironment)
    {
        $html = $twigEnvironment->render('question/homepage.html.twig');

        return new Response($html);
        // return $this->render('question/homepage.html.twig');
        // return new Response("Response sent"); // Controller function always needs to return a response
    }

    /**
     * @Route("/questions/{slug}", name="app_question_show")
     */
    public function show($slug)
    {
        $answers = [
            'Make sure your cat is sitting purrrfectly still',
            'Honestly, I like furry shoes better than MY cat',
            'Maybe.. try saying the spell backwards?',
        ];

        dump($slug, $this); // or dd($slug, $this);

        /*
            render(string: 'path of the template', array: list of variables we want to pass to the template)
        */
        return $this->render('question/show.html.twig',[
            'question' => ucwords(str_replace('-', ' ', $slug)),
            'answers' => $answers,
        ]);
    }
} 