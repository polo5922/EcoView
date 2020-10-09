<?php

namespace ContainerFxcXxxA;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_1UbjebNService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.1UbjebN' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.1UbjebN'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'associationRepository' => ['privates', 'App\\Repository\\AssociationRepository', 'getAssociationRepositoryService', true],
        ], [
            'associationRepository' => 'App\\Repository\\AssociationRepository',
        ]);
    }
}
