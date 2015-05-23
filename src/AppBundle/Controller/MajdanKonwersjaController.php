<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Form\MajdanKonwersjaType;
use Majdan\Tools\Konwersja;


class MajdanKonwersjaController extends Controller
{ 

    /**
     * @Route("/majdan/konwersja/show/form", name="majdan_konwersja_show_form")
     */
    public function showFormAction()
    {
        $konwersja = new Konwersja();
        $form = $this->createCreateForm($konwersja);

        return $this->render(
            'AppBundle:MajdanKonwersja:form.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }

    /**
     * @Route("/majdan/konwersja/calc", name="majdan_konwersja_licz")
     * @Method("POST")
     */
    public function calculateAction(Request $request)
    {
        $konwersja = new Konwersja();
        $form = $this->createCreateForm($konwersja);
        $form->handleRequest($request);

        if ($form->isValid()) {

            return $this->render(
                'AppBundle:MajdanKonwersja:wynik.html.twig',
                array('wynik' => $konwersja->conv())
            );

        }

        return $this->render(
            'AppBundle:MajdanKonwersja:form.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }

    /**
     * Creates a form...
     *
     * @param Konwersja $konwersja The object
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Konwersja $konwersja)
    {
        $form = $this->createForm(new MajdanKonwersjaType(), $konwersja, array(
            'action' => $this->generateUrl('majdan_konwersja_licz'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Przelicz'));

        return $form;
    }


}
