<?php
namespace Noimage\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class IndexController extends Controller
{
    public function indexAction()
    {
        return $this->render('NoimageAdminBundle:Index:index.html.twig', array('name' => '1231231253'));
    }
}
