<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\UpdateAccessToken;

trait UpdateAccessTokenTrait
{
    /**
     * @param UpdateAccessTokenRequest $args
     * @return UpdateAccessTokenResponse
     */
    public function updateAccessToken(UpdateAccessTokenRequest $args)
    {
        $result = parent::updateAccessToken($args->toArray());
        return new UpdateAccessTokenResponse($result->toArray());
    }
}
