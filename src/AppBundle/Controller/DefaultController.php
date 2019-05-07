<?php

namespace AppBundle\Controller;

use AppBundle\AppBundle;
use AppBundle\Entity\Producto;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{

    public function indexAction(Request $request)
    {
        $productos =$this->getDoctrine()->getRepository('AppBundle:Producto')->findAll();


        return $this->render('base.html.twig',array('productos' => $productos));
    }
    public function productoAction($id)
    {
        $producto =$this->getDoctrine()->getRepository('AppBundle:Producto')->find($id);

        return $this->render('producto.html.twig', array('producto' => $producto));
    }
}
