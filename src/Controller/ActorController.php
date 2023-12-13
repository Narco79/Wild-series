<?php

namespace App\Controller;

use App\Entity\Actor;
use App\Entity\Program;
use App\Repository\ActorRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class ActorController extends AbstractController
{
    #[Route('/actor/{id}', name: 'actor_show')]
    public function show(Actor $actor): Response
    {
        if (!$actor) {
            throw $this->createNotFoundException(
                'no program with id : ' . $actor . 'found in program\'s table.'
            );
        }
        return $this->render('actor/show.html.twig', ['actor' => $actor]);
    }

    #[Route('/actor', name: 'actor_index')]
    public function index(ActorRepository $actorRepository): Response
    {
        $actors = $actorRepository->findAll();
        return $this->render('actor/index.html.twig', ['actors' => $actors]);
    }
}
