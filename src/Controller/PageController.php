<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends AbstractController
{
    private $productos = [["id" => 1 , "nombre" => "producto1" , "precio" =>550, 'imagen' => 'product01.png'],
    ["id" => 2 , "nombre" => "producto2" , "precio" =>230, 'imagen' => 'product02.png'],
    ["id" => 3 , "nombre" => "producto3" , "precio" =>310, 'imagen' => 'product03.png'],
    ["id" => 4 , "nombre" => "producto4" , "precio" =>420, 'imagen' => 'product04.png'],
    ["id" => 5 , "nombre" => "producto5" , "precio" =>440, 'imagen' => 'product05.png']];
    /**
     * @Route("/", name="index")
     */
    public function index()
    {
        return $this->render('index.html.twig', [
            'controller_name' => 'PageController',
            'products' => $this->productos
        ]);
    }
}