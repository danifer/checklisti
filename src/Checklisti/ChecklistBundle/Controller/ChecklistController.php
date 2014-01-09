<?php

namespace Checklisti\ChecklistBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Checklisti\ChecklistBundle\Entity\Checklist;
use Symfony\Component\HttpFoundation\Request;

class ChecklistController extends Controller
{
    public function indexAction()
    {
        /*
         * The action's view can be rendered using render() method
         * or @Template annotation as demonstrated in DemoController.
         *
         */
        return $this->render('ChecklistiChecklistBundle:Checklist:index.html.twig');
    }

    public function newAction(Request $request)
    {
      $checklist = new Checklist();
      $checklist->setTitle('Sample Title');

      $form = $this->createFormBuilder($checklist)
        ->add('title', 'text', array('label' => 'My Title'))
        ->add('description', 'textarea', array('required' => false, 'label' => 'My Description'))
        ->add('save', 'submit')
        ->getForm();

      $form->handleRequest($request);

      if ($form->isValid()) {
        
        //Do something
      }

      return $this->render('ChecklistiChecklistBundle:Checklist:new.html.twig', array(
        'form' => $form->createView()
      ));
    }
}
