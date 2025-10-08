<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\AssociateSoftwareToken;

trait AssociateSoftwareTokenTrait
{
    /**
     * @param AssociateSoftwareTokenRequest $args
     * @return AssociateSoftwareTokenResponse
     */
    public function associateSoftwareToken(AssociateSoftwareTokenRequest $args)
    {
        $result = parent::associateSoftwareToken($args->toArray());
        return new AssociateSoftwareTokenResponse($result->toArray());
    }
}
