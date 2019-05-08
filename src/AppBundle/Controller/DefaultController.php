<?php

namespace AppBundle\Controller;

use AppBundle\AppBundle;
use AppBundle\Entity\Producto;
use AppBundle\Form\ProductoType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{

    public function indexAction(Request $request)
    {
        $productos =$this->getDoctrine()->getRepository('AppBundle:Producto')->findAll();

        $newp = new Producto();
        $form = $this->createForm(ProductoType::class,$newp);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
            $file = $newp->getFoto();
            $fileName = md5(uniqid()).'.'.$file->guessExtension();
            $cvDir = $this->container->getparameter('kernel.root_dir').'/../web/fotos/';
            $file->move($cvDir, $fileName);
            $newp->setFoto($fileName);

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($newp);
            $entityManager->flush();

            return $this->redirect($this->generateUrl('app'));
        }

        return $this->render('base.html.twig',array('productos' => $productos, 'form' => $form->createView()));
    }
    public function productoAction(Request $request,$id)
    {
        $producto =$this->getDoctrine()->getRepository('AppBundle:Producto')->find($id);

        return $this->render('producto.html.twig', array('producto' => $producto));
    }
}
