<?php

namespace Sunaoka\Aws\Structures\Signin\PutConsoleAuthorizationConfiguration;

trait PutConsoleAuthorizationConfigurationTrait
{
    /**
     * @param PutConsoleAuthorizationConfigurationRequest $args
     * @return PutConsoleAuthorizationConfigurationResponse
     */
    public function putConsoleAuthorizationConfiguration(PutConsoleAuthorizationConfigurationRequest $args)
    {
        $result = parent::putConsoleAuthorizationConfiguration($args->toArray());
        return new PutConsoleAuthorizationConfigurationResponse($result->toArray());
    }
}
