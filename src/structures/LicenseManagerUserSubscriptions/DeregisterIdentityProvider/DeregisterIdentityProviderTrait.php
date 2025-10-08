<?php

namespace Sunaoka\Aws\Structures\LicenseManagerUserSubscriptions\DeregisterIdentityProvider;

trait DeregisterIdentityProviderTrait
{
    /**
     * @param DeregisterIdentityProviderRequest $args
     * @return DeregisterIdentityProviderResponse
     */
    public function deregisterIdentityProvider(DeregisterIdentityProviderRequest $args)
    {
        $result = parent::deregisterIdentityProvider($args->toArray());
        return new DeregisterIdentityProviderResponse($result->toArray());
    }
}
