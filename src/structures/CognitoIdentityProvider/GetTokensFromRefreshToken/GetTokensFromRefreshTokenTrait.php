<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\GetTokensFromRefreshToken;

trait GetTokensFromRefreshTokenTrait
{
    /**
     * @param GetTokensFromRefreshTokenRequest $args
     * @return GetTokensFromRefreshTokenResponse
     */
    public function getTokensFromRefreshToken(GetTokensFromRefreshTokenRequest $args)
    {
        $result = parent::getTokensFromRefreshToken($args->toArray());
        return new GetTokensFromRefreshTokenResponse($result->toArray());
    }
}
