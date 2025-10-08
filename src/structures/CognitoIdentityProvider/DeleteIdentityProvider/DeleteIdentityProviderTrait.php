<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\DeleteIdentityProvider;

trait DeleteIdentityProviderTrait
{
    /**
     * @param DeleteIdentityProviderRequest $args
     * @return void
     */
    public function deleteIdentityProvider(DeleteIdentityProviderRequest $args)
    {
        parent::deleteIdentityProvider($args->toArray());
    }
}
