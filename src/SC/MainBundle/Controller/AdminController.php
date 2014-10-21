<?php
/**
 * Created by PhpStorm.
 * User: ivanristic
 * Date: 10/21/14
 * Time: 7:02 PM
 */


namespace SC\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdminController extends Controller
{
    public function indexAction()
    {
        return $this->render('SCMainBundle:Admin:index.html.twig');
    }
}
