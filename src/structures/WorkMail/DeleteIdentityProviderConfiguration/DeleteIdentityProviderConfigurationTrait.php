<?php

namespace Sunaoka\Aws\Structures\WorkMail\DeleteIdentityProviderConfiguration;

trait DeleteIdentityProviderConfigurationTrait
{
    /**
     * @param DeleteIdentityProviderConfigurationRequest $args
     * @return DeleteIdentityProviderConfigurationResponse
     */
    public function deleteIdentityProviderConfiguration(DeleteIdentityProviderConfigurationRequest $args)
    {
        $result = parent::deleteIdentityProviderConfiguration($args->toArray());
        return new DeleteIdentityProviderConfigurationResponse($result->toArray());
    }
}
