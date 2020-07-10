<?php

namespace App\Form;
// Modif Sylvain test pour github seul ce commentaire est ajouté
use App\Entity\RdiUser;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;


use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
// use Symfony\Component\Validator\Constraints as Assert;

class RdiUserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextType::class, [
                "attr" => [
                    "class" => "form-control"
                ]
            ])
            ->add('prenom', TextType::class, [
                "attr" => [
                    "class" => "form-control"
                ]
            ])
            ->add('email', EmailType::class, [
                "attr" => [
                    "class" => "form-control"
                ]
            ])
            ->add('mobile', NumberType::class, [
                "attr" => [
                    "class" => "form-control"
                ]
            ])
            
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => RdiUser::class,
        ]);
    }
}
