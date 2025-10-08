<?php

namespace Sunaoka\Aws\Structures\Lightsail\CreateContainerServiceRegistryLogin;

trait CreateContainerServiceRegistryLoginTrait
{
    /**
     * @param CreateContainerServiceRegistryLoginRequest $args
     * @return CreateContainerServiceRegistryLoginResponse
     */
    public function createContainerServiceRegistryLogin(CreateContainerServiceRegistryLoginRequest $args)
    {
        $result = parent::createContainerServiceRegistryLogin($args->toArray());
        return new CreateContainerServiceRegistryLoginResponse($result->toArray());
    }
}
