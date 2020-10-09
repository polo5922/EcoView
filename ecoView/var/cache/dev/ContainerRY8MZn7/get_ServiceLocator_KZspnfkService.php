<?php

namespace ContainerRY8MZn7;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_KZspnfkService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.KZspnfk' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.KZspnfk'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'authenticator' => ['privates', 'App\\Security\\UserAuthenticator', 'getUserAuthenticatorService', true],
            'guardHandler' => ['privates', 'security.authentication.guard_handler', 'getSecurity_Authentication_GuardHandlerService', true],
        ], [
            'authenticator' => 'App\\Security\\UserAuthenticator',
            'guardHandler' => '?',
        ]);
    }
}
