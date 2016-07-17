<?php

namespace ExamBlancBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class IntegrationController extends Controller
{
    public function indexAction()
    {
        return $this->render('ExamBlancBundle:integration:ennonce.html.twig');
    }

    public function examAction()
    {
        return $this->render('ExamBlancBundle:integration:index.html.twig');
    }
}