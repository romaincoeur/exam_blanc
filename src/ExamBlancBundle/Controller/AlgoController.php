<?php

namespace ExamBlancBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AlgoController extends Controller
{
    public function indexAction()
    {
        $tab_sans_tri = array(12, 43, 5634, 54, 76, 23, 12, 4, 6);

        $tab_avec_tri = $this->tri_tab($tab_sans_tri);

        return $this->render('ExamBlancBundle:Algorithmique:index.html.twig', array(
            'tab_sans_tri' => $tab_sans_tri,
            'tab_avec_tri' => $tab_avec_tri
        ));
    }

    // Complete la fonction se nommant "tri_tab" permettant de trié le tableau "tab_sans_tri" dans l'ordre croissant
    // A au fait, fonction de référence autorisé ==> AUCUNE :-)

    private function tri_tab()
    {

    }

    // Fin

}