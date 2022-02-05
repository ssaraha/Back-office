<?php

namespace App\Form;

//use Symfony\Component\Form\AbstractType;
//use Symfony\Component\Form\FormBuiderInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Intl\Countries;

use App\Data\SearchLove;

class SearchLoveForm extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$countries = array_combine(Countries::getNames(), Countries::getNames());
		//$countries = ['Af' => 'Afghan'];
		//dd(array_flip($countries));
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
				->add('find_gender', ChoiceType::class, [
					'placeholder' => strtoupper('Je recherche'),
					'label' => false,
					'required' => false,
					'choices' => [
						'homme' => 'homme',
						'femme' => 'femme'
					]
				])
				->add('country', ChoiceType::class, [
					'placeholder' => strtoupper('en'),
					'label' => false,
					'required' => false,
					/*'choices' => [
						'AF' => 'Afgha',
						'woman' => 'femme'
					],*/
					'choices' => $countries,
				])
				;
	}

	public function configureOptions(OptionsResolver $resolver)
	{
		$resolver->setDefaults([
			      	'data_class' => SearchLove::class,
			      	'method' => 'GET',
			      	'csrf_protection' => false
				  ]);
	}

	public function getBlockPrefix()
	{
		return '';
	}
}