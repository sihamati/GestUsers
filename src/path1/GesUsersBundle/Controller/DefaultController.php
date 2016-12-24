<?php

namespace path1\GesUsersBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('path1GesUsersBundle:Default:index.html.twig', array('name' => $name));
    }
}
