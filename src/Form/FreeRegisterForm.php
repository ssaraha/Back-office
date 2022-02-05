<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;

use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Email;

use App\Data\FreeRegister;


class FreeRegisterForm extends AbstractType
{


	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
			->add('my_gender', ChoiceType::class, [
					'placeholder' => strtoupper('Je suis'),
					'label' => false,
					'required' => false,
					'choices' => [
						'homme' => 'homme',
						'femme' => 'femme'
					]
				])
			->add('email', EmailType::class, [
				'label' => false,
				'attr' => [
					'placeholder' => 'Votre email',
				],
				'constraints' => [
						new NotBlank([
                        'message' => 'Ce champs est obligatoire , veuillez remplir ce champs.',
	                    ]),
	                     new Email([
	                        'message' => 'Veuillez entrer un adresse email valide.',
	                    ]),
					]
			])
			->add('find_gender', ChoiceType::class, [
				'placeholder' => strtoupper('Je recherche'),
				'label' => false,
				'required' => false,
				'choices' => [
					'homme' => 'homme',
					'femme' => 'femme'
				]
			]);
	}

	public function configureOptions(OptionsResolver $resolver)
	{
		$resolver->setDefaults([
				'data_class' => FreeRegister::class,
				'csrf_protection' => false,
				'method' => 'POST'
			]);
	}
	public function getBlockPrefix()
	{

		return '';
	}
}