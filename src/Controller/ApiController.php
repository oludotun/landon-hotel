<?php


namespace App\Controller;

use App\Repository\HotelRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class ApiController extends AbstractController implements TokenAuthenticatedController
{
    /**
     * @Route("/api/rooms")
     */
    public function home(HotelRepository $hotelRepository)
    {
        $hotels = $hotelRepository->findAll();
        return $this->json(['hotels' => $hotels]);
    }
}