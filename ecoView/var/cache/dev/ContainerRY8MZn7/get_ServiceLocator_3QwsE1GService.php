<?php

namespace ContainerRY8MZn7;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_3QwsE1GService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.3QwsE1G' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.3QwsE1G'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'assoc_repo' => ['privates', 'App\\Repository\\AssociationRepository', 'getAssociationRepositoryService', true],
        ], [
            'assoc_repo' => 'App\\Repository\\AssociationRepository',
        ]);
    }
}
