<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\InitiateAuth;

trait InitiateAuthTrait
{
    /**
     * @param InitiateAuthRequest $args
     * @return InitiateAuthResponse
     */
    public function initiateAuth(InitiateAuthRequest $args)
    {
        $result = parent::initiateAuth($args->toArray());
        return new InitiateAuthResponse($result->toArray());
    }
}
