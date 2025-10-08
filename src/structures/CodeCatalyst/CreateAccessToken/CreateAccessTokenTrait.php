<?php

namespace Sunaoka\Aws\Structures\CodeCatalyst\CreateAccessToken;

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
