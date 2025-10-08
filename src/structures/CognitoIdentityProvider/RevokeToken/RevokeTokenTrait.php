<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\RevokeToken;

trait RevokeTokenTrait
{
    /**
     * @param RevokeTokenRequest $args
     * @return RevokeTokenResponse
     */
    public function revokeToken(RevokeTokenRequest $args)
    {
        $result = parent::revokeToken($args->toArray());
        return new RevokeTokenResponse($result->toArray());
    }
}
