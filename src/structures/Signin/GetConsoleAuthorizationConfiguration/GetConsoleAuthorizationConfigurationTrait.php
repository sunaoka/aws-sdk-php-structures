<?php

namespace Sunaoka\Aws\Structures\Signin\GetConsoleAuthorizationConfiguration;

trait GetConsoleAuthorizationConfigurationTrait
{
    /**
     * @param GetConsoleAuthorizationConfigurationRequest $args
     * @return GetConsoleAuthorizationConfigurationResponse
     */
    public function getConsoleAuthorizationConfiguration(GetConsoleAuthorizationConfigurationRequest $args)
    {
        $result = parent::getConsoleAuthorizationConfiguration($args->toArray());
        return new GetConsoleAuthorizationConfigurationResponse($result->toArray());
    }
}
