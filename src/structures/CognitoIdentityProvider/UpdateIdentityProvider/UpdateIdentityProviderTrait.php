<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\UpdateIdentityProvider;

trait UpdateIdentityProviderTrait
{
    /**
     * @param UpdateIdentityProviderRequest $args
     * @return UpdateIdentityProviderResponse
     */
    public function updateIdentityProvider(UpdateIdentityProviderRequest $args)
    {
        $result = parent::updateIdentityProvider($args->toArray());
        return new UpdateIdentityProviderResponse($result->toArray());
    }
}
