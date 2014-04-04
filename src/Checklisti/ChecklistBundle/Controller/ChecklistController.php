<?php

namespace Checklisti\ChecklistBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Checklisti\ChecklistBundle\Entity\Checklist;
use Symfony\Component\HttpFoundation\Request;

class ChecklistController extends Controller
{
    public function indexAction()
    {
        $results = $this->getDoctrine()->getRepository('ChecklistiChecklistBundle:Checklist')->findAll();

        return $this->render('ChecklistiChecklistBundle:Checklist:index.html.twig', array(
            'results' => $results
        ));
    }

    public function editAction(Request $request, $id)
    {
        $checklist = new Checklist();
        $checklist->setTitle('New Checklist '.date('m/d/Y'));

        if ($id) {
            if ($result = $this->getDoctrine()->getRepository('ChecklistiChecklistBundle:Checklist')->findOneById($id)) {
                $checklist = $result;
            }
        }

        $form = $this->createFormBuilder($checklist)
            ->add('title', 'text', array('label' => 'My Title'))
            ->add('description', 'textarea', array('required' => false, 'label' => 'My Description'))
            ->add('save', 'submit')
            ->getForm();

        $form->handleRequest($request);

        if ($form->isValid()) {
            //Persist to database:
            $em = $this->getDoctrine()->getManager();
            $em->persist($form->getData());
            $em->flush();

            //Set the flash message:
            $request->getSession()->getFlashBag()->add('notice', 'Checklist saved.');

            //How about a redirect?
            return $this->redirect($this->generateUrl('_checklist_edit', array('id' => $form->getData()->getId())));
        }

        return $this->render('ChecklistiChecklistBundle:Checklist:edit.html.twig', array(
            'form' => $form->createView()
        ));
    }
}
