<?php
namespace App\Form;
 
use App\Entity\Soubassement;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

class SoubassementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
       
       
         
            ->add('type_soubassement', ChoiceType::class,[
                'choices' => [
                ' en hérisson' => 'Herisson',
                ' avec vide-sanitaire' => 'vide-sanitaire',
                ' avec sous-sol' => 'sous-sol',
                
                ],
                'label' => false
            ]
        
            );
       
            
    
        
        
    $builder
    ->add('tractopelle', CheckboxType::class, [
    'label'    => 'Tractopelle',
    'required' => false,
        ]);

    $builder
    ->add('camion_benne', CheckboxType::class, [
    'label'    => 'Camion benne',
    'required' => false,
        ]);
    $builder
    ->add('betonniere', CheckboxType::class, [
    'label'    => 'Betonnière',
    'required' => false,
            ]);
        
    }
 
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Soubassement::class,
        ));
    }
}
