<?php

namespace Sunaoka\Aws\Structures\Signin\DeleteConsoleAuthorizationConfiguration;

trait DeleteConsoleAuthorizationConfigurationTrait
{
    /**
     * @param DeleteConsoleAuthorizationConfigurationRequest $args
     * @return DeleteConsoleAuthorizationConfigurationResponse
     */
    public function deleteConsoleAuthorizationConfiguration(DeleteConsoleAuthorizationConfigurationRequest $args)
    {
        $result = parent::deleteConsoleAuthorizationConfiguration($args->toArray());
        return new DeleteConsoleAuthorizationConfigurationResponse($result->toArray());
    }
}
