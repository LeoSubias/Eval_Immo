<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Annonce;
use AppBundle\Entity\Type_Annonce;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $annonces = $em->getRepository('AppBundle:Annonce')->findAll();
        $type_Annonces = $em->getRepository('AppBundle:Type_Annonce')->findAll();
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
                'annonces' => $annonces,
                'type_Annonces' => $type_Annonces,
        ]);
    }

    

    /**
     * Finds and displays a annonce entity.
     *
     * @Route("annonce/{id}", name="admin_annonce_show")
     * @Method("GET")
     */

    public function annonceIdAction(Request $request, $id)
    {
        $annonce = $this->getDoctrine()
            ->getRepository(Annonce::class)->find($id);
        $em = $this->getDoctrine()->getManager();


        return $this->render('default/annonce.html.twig', array(
            'annonce' => $annonce,
        ));
        
    }

}
