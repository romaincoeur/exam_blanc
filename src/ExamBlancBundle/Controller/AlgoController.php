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

    // Complète la fonction se nommant "tri_tab" permettant de trier le tableau "tab_sans_tri" dans l'ordre croissant
    // Ah au fait, fonction de référence autorisée ==> AUCUNE :-)

    private function tri_tab($raw_tab, $sorted_tab=[])
    {
        if ($raw_tab==[]) return $sorted_tab;
        elseif ($sorted_tab==[]){
            $el = array_pop($raw_tab);
            return $this->tri_tab($raw_tab, [$el]);
        }
        else {
            $el = array_pop($raw_tab);
            $i = 0;
            while ($el > $sorted_tab[$i]){
                $i++;
                if ($i==count($sorted_tab)){
                    $sorted_tab[] = $el;
                    return $this->tri_tab($raw_tab, $sorted_tab);
                }
            }
            array_splice($sorted_tab, $i, 0, $el);
            return $this->tri_tab($raw_tab, $sorted_tab);
        }
    }

    // Fin

}