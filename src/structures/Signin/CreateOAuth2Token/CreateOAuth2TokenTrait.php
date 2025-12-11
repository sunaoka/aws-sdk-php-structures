<?php

namespace Sunaoka\Aws\Structures\Signin\CreateOAuth2Token;

trait CreateOAuth2TokenTrait
{
    /**
     * @param CreateOAuth2TokenRequest $args
     * @return CreateOAuth2TokenResponse
     */
    public function createOAuth2Token(CreateOAuth2TokenRequest $args)
    {
        $result = parent::createOAuth2Token($args->toArray());
        return new CreateOAuth2TokenResponse($result->toArray());
    }
}
