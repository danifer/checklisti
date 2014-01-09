<?php

namespace Checklisti\ChecklistBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class StaticController extends Controller
{
    public function indexAction($page)
    {
        /*
         * The action's view can be rendered using render() method
         * or @Template annotation as demonstrated in DemoController.
         *
         */
        if ($page) {
          return $this->render('ChecklistiChecklistBundle:Static:'.$page.'.html.twig');
        }

        return $this->render('ChecklistiChecklistBundle:Static:index.html.twig');
    }
}
