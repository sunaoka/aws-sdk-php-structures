<?php

namespace Sunaoka\Aws\Structures\LicenseManagerUserSubscriptions\RegisterIdentityProvider;

trait RegisterIdentityProviderTrait
{
    /**
     * @param RegisterIdentityProviderRequest $args
     * @return RegisterIdentityProviderResponse
     */
    public function registerIdentityProvider(RegisterIdentityProviderRequest $args)
    {
        $result = parent::registerIdentityProvider($args->toArray());
        return new RegisterIdentityProviderResponse($result->toArray());
    }
}
