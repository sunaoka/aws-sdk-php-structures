<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\DeleteIdentityProvider;

trait DeleteIdentityProviderTrait
{
    /**
     * @param DeleteIdentityProviderRequest $args
     * @return DeleteIdentityProviderResponse
     */
    public function deleteIdentityProvider(DeleteIdentityProviderRequest $args)
    {
        $result = parent::deleteIdentityProvider($args->toArray());
        return new DeleteIdentityProviderResponse($result->toArray());
    }
}
