<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\CreateAccessToken;

trait CreateAccessTokenTrait
{
    /**
     * @param CreateAccessTokenRequest $args
     * @return CreateAccessTokenResponse
     */
    public function createAccessToken(CreateAccessTokenRequest $args)
    {
        $result = parent::createAccessToken($args->toArray());
        return new CreateAccessTokenResponse($result->toArray());
    }
}
