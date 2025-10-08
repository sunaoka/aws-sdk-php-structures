<?php

namespace Sunaoka\Aws\Structures\AmplifyBackend\CreateToken;

trait CreateTokenTrait
{
    /**
     * @param CreateTokenRequest $args
     * @return CreateTokenResponse
     */
    public function createToken(CreateTokenRequest $args)
    {
        $result = parent::createToken($args->toArray());
        return new CreateTokenResponse($result->toArray());
    }
}
