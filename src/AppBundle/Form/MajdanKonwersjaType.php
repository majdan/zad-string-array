<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class MajdanKonwersjaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dana')
            ->add('jednostka1', 'text', array('label' => 'Z'))
            ->add('jednostka2', 'text', array('label' => 'Na'))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Majdan\Tools\Konwersja'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'appbundle_majdan_konwersja';
    }
}
