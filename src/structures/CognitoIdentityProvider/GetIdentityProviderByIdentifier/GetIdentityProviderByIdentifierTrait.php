<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\GetIdentityProviderByIdentifier;

trait GetIdentityProviderByIdentifierTrait
{
    /**
     * @param GetIdentityProviderByIdentifierRequest $args
     * @return GetIdentityProviderByIdentifierResponse
     */
    public function getIdentityProviderByIdentifier(GetIdentityProviderByIdentifierRequest $args)
    {
        $result = parent::getIdentityProviderByIdentifier($args->toArray());
        return new GetIdentityProviderByIdentifierResponse($result->toArray());
    }
}
