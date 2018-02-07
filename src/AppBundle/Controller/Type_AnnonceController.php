<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Type_Annonce;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Type_annonce controller.
 *
 * @Route("admin/type_annonce")
 */
class Type_AnnonceController extends Controller
{
    /**
     * Lists all type_Annonce entities.
     *
     * @Route("/", name="type_annonce_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $type_Annonces = $em->getRepository('AppBundle:Type_Annonce')->findAll();

        return $this->render('type_annonce/index.html.twig', array(
            'type_Annonces' => $type_Annonces,
        ));
    }

    /**
     * Creates a new type_Annonce entity.
     *
     * @Route("/new", name="type_annonce_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $type_Annonce = new Type_annonce();
        $form = $this->createForm('AppBundle\Form\Type_AnnonceType', $type_Annonce);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($type_Annonce);
            $em->flush();

            return $this->redirectToRoute('type_annonce_show', array('id' => $type_Annonce->getId()));
        }

        return $this->render('type_annonce/new.html.twig', array(
            'type_Annonce' => $type_Annonce,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a type_Annonce entity.
     *
     * @Route("/{id}", name="type_annonce_show")
     * @Method("GET")
     */
    public function showAction(Type_Annonce $type_Annonce)
    {
        $deleteForm = $this->createDeleteForm($type_Annonce);

        return $this->render('type_annonce/show.html.twig', array(
            'type_Annonce' => $type_Annonce,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing type_Annonce entity.
     *
     * @Route("/{id}/edit", name="type_annonce_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Type_Annonce $type_Annonce)
    {
        $deleteForm = $this->createDeleteForm($type_Annonce);
        $editForm = $this->createForm('AppBundle\Form\Type_AnnonceType', $type_Annonce);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('type_annonce_edit', array('id' => $type_Annonce->getId()));
        }

        return $this->render('type_annonce/edit.html.twig', array(
            'type_Annonce' => $type_Annonce,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a type_Annonce entity.
     *
     * @Route("/{id}", name="type_annonce_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Type_Annonce $type_Annonce)
    {
        $form = $this->createDeleteForm($type_Annonce);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($type_Annonce);
            $em->flush();
        }

        return $this->redirectToRoute('type_annonce_index');
    }

    /**
     * Creates a form to delete a type_Annonce entity.
     *
     * @param Type_Annonce $type_Annonce The type_Annonce entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Type_Annonce $type_Annonce)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('type_annonce_delete', array('id' => $type_Annonce->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
