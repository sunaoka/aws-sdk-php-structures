<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\GetIdentityProvider;

trait GetIdentityProviderTrait
{
    /**
     * @param GetIdentityProviderRequest $args
     * @return GetIdentityProviderResponse
     */
    public function getIdentityProvider(GetIdentityProviderRequest $args)
    {
        $result = parent::getIdentityProvider($args->toArray());
        return new GetIdentityProviderResponse($result->toArray());
    }
}
