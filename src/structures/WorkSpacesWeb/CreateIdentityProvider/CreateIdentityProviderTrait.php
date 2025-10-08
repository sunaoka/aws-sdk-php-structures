<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\CreateIdentityProvider;

trait CreateIdentityProviderTrait
{
    /**
     * @param CreateIdentityProviderRequest $args
     * @return CreateIdentityProviderResponse
     */
    public function createIdentityProvider(CreateIdentityProviderRequest $args)
    {
        $result = parent::createIdentityProvider($args->toArray());
        return new CreateIdentityProviderResponse($result->toArray());
    }
}
