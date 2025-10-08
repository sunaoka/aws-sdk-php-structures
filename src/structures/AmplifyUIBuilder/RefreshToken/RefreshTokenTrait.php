<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\RefreshToken;

trait RefreshTokenTrait
{
    /**
     * @param RefreshTokenRequest $args
     * @return RefreshTokenResponse
     */
    public function refreshToken(RefreshTokenRequest $args)
    {
        $result = parent::refreshToken($args->toArray());
        return new RefreshTokenResponse($result->toArray());
    }
}
