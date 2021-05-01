<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class ActivitiesController extends AbstractController
{
    private $client;

    public function __construct(HttpClientInterface $client)
    {
        $this->client = $client;
    }

    public function fetchStravaActivities(): array
    {
        $response = $this->client->request(
            'GET',
            'https://www.strava.com/api/v3/athlete/activities?access_token=86d3983fb7adaa62821c885826204dfd24df1bf4'
        );

        $statusCode = $response->getStatusCode();
        $contentType = $response->getHeaders();
        $content = $response->getContent();
        $content = $response->toArray();

        return $content;
    }


    #[Route('/activities', name: 'activities')]
    public function index(): Response
    {
        $activities = $this->fetchStravaActivities();
        dump($activities);

        return $this->render('activities/index.html.twig', [
            'controller_name' => 'ActivitiesController',
            'activities' => $activities,
        ]);
    }
}
