<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'form.type_guesser.doctrine' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/form/FormTypeGuesserInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/doctrine-bridge/Form/DoctrineOrmTypeGuesser.php';

return $this->privates['form.type_guesser.doctrine'] = new \Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser(($this->services['doctrine'] ?? $this->getDoctrineService()));