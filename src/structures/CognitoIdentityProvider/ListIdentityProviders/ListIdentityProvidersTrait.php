<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\ListIdentityProviders;

trait ListIdentityProvidersTrait
{
    /**
     * @param ListIdentityProvidersRequest $args
     * @return ListIdentityProvidersResponse
     */
    public function listIdentityProviders(ListIdentityProvidersRequest $args)
    {
        $result = parent::listIdentityProviders($args->toArray());
        return new ListIdentityProvidersResponse($result->toArray());
    }
}
