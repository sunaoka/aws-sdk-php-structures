<?php

namespace Sunaoka\Aws\Structures\Signin\CreateBearerToken;

trait CreateBearerTokenTrait
{
    /**
     * @param CreateBearerTokenRequest $args
     * @return CreateBearerTokenResponse
     */
    public function createBearerToken(CreateBearerTokenRequest $args)
    {
        $result = parent::createBearerToken($args->toArray());
        return new CreateBearerTokenResponse($result->toArray());
    }
}
