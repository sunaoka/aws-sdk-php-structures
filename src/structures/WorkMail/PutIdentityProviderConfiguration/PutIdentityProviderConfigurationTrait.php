<?php

namespace Sunaoka\Aws\Structures\WorkMail\PutIdentityProviderConfiguration;

trait PutIdentityProviderConfigurationTrait
{
    /**
     * @param PutIdentityProviderConfigurationRequest $args
     * @return PutIdentityProviderConfigurationResponse
     */
    public function putIdentityProviderConfiguration(PutIdentityProviderConfigurationRequest $args)
    {
        $result = parent::putIdentityProviderConfiguration($args->toArray());
        return new PutIdentityProviderConfigurationResponse($result->toArray());
    }
}
