<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\GetDerivedToken;

trait GetDerivedTokenTrait
{
    /**
     * @param GetDerivedTokenRequest $args
     * @return GetDerivedTokenResponse
     */
    public function getDerivedToken(GetDerivedTokenRequest $args)
    {
        $result = parent::getDerivedToken($args->toArray());
        return new GetDerivedTokenResponse($result->toArray());
    }
}
