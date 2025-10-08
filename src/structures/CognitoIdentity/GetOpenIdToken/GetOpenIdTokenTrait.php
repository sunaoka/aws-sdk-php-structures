<?php

namespace Sunaoka\Aws\Structures\CognitoIdentity\GetOpenIdToken;

trait GetOpenIdTokenTrait
{
    /**
     * @param GetOpenIdTokenRequest $args
     * @return GetOpenIdTokenResponse
     */
    public function getOpenIdToken(GetOpenIdTokenRequest $args)
    {
        $result = parent::getOpenIdToken($args->toArray());
        return new GetOpenIdTokenResponse($result->toArray());
    }
}
