<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class CommentController extends AbstractController {
    /**
     * @Route("/comments/{id}/vote/{direction}", methods="POST")
     */
    public function commentVote($id, $direction, LoggerInterface $logger) {
        // TODO: Use ID to query database

        // use real logic here to save this to the database
        if ($direction === 'up') {
            $logger->info('Voting up!');
            $currentVoteCount = rand(7, 100);
        } else {
            $logger->info('Voting down!');
            $currentVoteCount = rand(0, 5);
        }

        // return new JsonResponse(['votes' => $currentVoteCount]);
        return $this->json(['votes' => $currentVoteCount]); // same effect but even simpler
    }
}