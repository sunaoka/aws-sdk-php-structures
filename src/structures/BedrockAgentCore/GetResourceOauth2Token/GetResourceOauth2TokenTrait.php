<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetResourceOauth2Token;

trait GetResourceOauth2TokenTrait
{
    /**
     * @param GetResourceOauth2TokenRequest $args
     * @return GetResourceOauth2TokenResponse
     */
    public function getResourceOauth2Token(GetResourceOauth2TokenRequest $args)
    {
        $result = parent::getResourceOauth2Token($args->toArray());
        return new GetResourceOauth2TokenResponse($result->toArray());
    }
}
