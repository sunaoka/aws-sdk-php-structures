<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetWorkloadAccessTokenForJWT;

trait GetWorkloadAccessTokenForJWTTrait
{
    /**
     * @param GetWorkloadAccessTokenForJWTRequest $args
     * @return GetWorkloadAccessTokenForJWTResponse
     */
    public function getWorkloadAccessTokenForJWT(GetWorkloadAccessTokenForJWTRequest $args)
    {
        $result = parent::getWorkloadAccessTokenForJWT($args->toArray());
        return new GetWorkloadAccessTokenForJWTResponse($result->toArray());
    }
}
