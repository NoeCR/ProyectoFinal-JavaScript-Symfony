<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends AbstractController
{
    private $productos = [["id" => 1 , "nombre" => "producto1" , "precio" =>550, 'imagen' => 'product01.png'],
    ["id" => 2 , "nombre" => "producto2" , "precio" =>230, 'imagen' => 'product02.png'],
    ["id" => 3 , "nombre" => "producto3" , "precio" =>310, 'imagen' => 'product03.png'],
    ["id" => 4 , "nombre" => "producto4" , "precio" =>426, 'imagen' => 'product04.png'],
    ["id" => 5 , "nombre" => "producto5" , "precio" =>154, 'imagen' => 'product05.png'],
    ["id" => 6 , "nombre" => "producto6" , "precio" =>980, 'imagen' => 'product06.png'],
    ["id" => 7 , "nombre" => "producto7" , "precio" =>465, 'imagen' => 'product07.png'],
    ["id" => 8 , "nombre" => "producto8" , "precio" =>225, 'imagen' => 'product08.png'],
    ["id" => 9 , "nombre" => "producto9" , "precio" =>502, 'imagen' => 'product09.png'],
    ["id" => 10 , "nombre" => "producto10" , "precio" =>152, 'imagen' => 'product10.jpg'],
    ["id" => 11 , "nombre" => "producto11" , "precio" =>185, 'imagen' => 'product11.jpg'],
    ["id" => 12 , "nombre" => "producto12" , "precio" =>115, 'imagen' => 'product12.png']];
    
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