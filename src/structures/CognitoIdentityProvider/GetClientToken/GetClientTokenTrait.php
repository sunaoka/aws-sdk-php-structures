<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\GetClientToken;

trait GetClientTokenTrait
{
    /**
     * @param GetClientTokenRequest $args
     * @return GetClientTokenResponse
     */
    public function getClientToken(GetClientTokenRequest $args)
    {
        $result = parent::getClientToken($args->toArray());
        return new GetClientTokenResponse($result->toArray());
    }
}
