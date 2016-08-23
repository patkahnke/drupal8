<?php

namespace Drupal\get_movies\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\get_movies\ProofAPIRequests\GetAllMovies;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Response;

class GetMoviesController extends ControllerBase
{
    private $getAllMovies;

    public function __construct(GetAllMovies $getAllMovies)
    {
        $this->getAllMovies = $getAllMovies;
    }

    public function listAllMovies()
    {
        $listAllMovies = $this->getAllMovies->getMovies();

        return new Response();
    }

    public static function create(ContainerInterface $container)
    {
        $getAllMovies = $container->get('get_movies.get_all_movies');

        return new static($getAllMovies);
    }

}