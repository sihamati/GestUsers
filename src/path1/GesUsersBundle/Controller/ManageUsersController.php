<?php

namespace path1\GesUsersBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use path1\GesUsersBundle\Entity\ManageUsers;
use path1\GesUsersBundle\Form\ManageUsersType;

class ManageUsersController extends Controller
{
    public function AddUserAction()
    {
        $ManageUsers= new ManageUsers();
        $form = $this->container->get('form.factory')->create( new ManageUsersType(), $ManageUsers);
        $request = $this->getRequest();
        if($request->getMethod()=='POST')
        {
            $form->bind($request);
            if($form->isValid())
            {
                $em=$this->container->get('doctrine')->getEntityManager();
                $em->persist($ManageUsers);
                $em->flush();
                return $this->redirect($this->generateUrl("_list_user"));
            }
        }
        return $this->render('path1GesUsersBundle:ManageUsers:AddUser.html.twig', array(
              'form' => $form->createView()
            ));    }

    public function ListUserAction()
    {
        $em = $this->container->get('doctrine')->getEntityManager();
        $ManageUsers = $em->getRepository('path1GesUsersBundle:ManageUsers')->findAll();
        return $this->render('path1GesUsersBundle:ManageUsers:ListUsers.html.twig', array('user' => $ManageUsers ));
    }

    public function UpdateUserAction($id)
    {
         $em = $this->container->get('doctrine')->getEntityManager();
        $ManageUsers = $em->getRepository('path1GesUsersBundle:ManageUsers')->find($id);
        $form = $this->container->get('form.factory')->create( new ManageUsersType(), $ManageUsers);
        $request = $this->getRequest();
        if($request->getMethod()=='POST')
        {
            $form->bind($request);
            if($form->isValid())
            {
                $em=$this->container->get('doctrine')->getEntityManager();
                $em->persist($ManageUsers);
                $em->flush();
                 return $this->redirect($this->generateUrl("_list_user"));
            }

        }
        return $this->render('path1GesUsersBundle:ManageUsers:UpdateUser.html.twig', array('form' => $form->createView()));
    }

    public function DeleteUserAction($id)
    {
        $em = $this->container->get('doctrine')->getEntityManager();
        $ManageUsers = $em->getRepository('path1GesUsersBundle:ManageUsers')->find($id);
        $em->remove($ManageUsers);
        $em->flush();

        return $this->redirect($this->generateUrl("_list_user"));
        }

}
