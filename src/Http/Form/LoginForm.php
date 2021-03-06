<?php

namespace Jowy\P2bj\Http\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class LoginForm
 * @package Jowy\P2bj\Http\Form
 */
class LoginForm extends AbstractType
{
    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $password;

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add(
            'username',
            'text',
            [
                'constraints' => new Assert\NotBlank(),
                'attr' => ['class' => 'gui-input'],
                'label' => 'Username',
                'label_attr' => ['class' => 'field-label text-muted fs18 mb10']
            ]
        )->add(
            'password',
            'password',
            [
                'constraints' => new Assert\NotBlank(),
                'attr' => ['class' => 'gui-input'],
                'label' => 'password',
                'label_attr' => ['class' => 'field-label text-muted fs18 mb10']
            ]
        )
        ->add(
            'login',
            'submit',
            [
                'attr' => ['class' => 'button btn-primary mr10 pull-right']
            ]
        );
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'login';
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param string $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }
}
