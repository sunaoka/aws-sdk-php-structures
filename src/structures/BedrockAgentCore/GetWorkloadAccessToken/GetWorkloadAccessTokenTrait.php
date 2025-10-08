<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetWorkloadAccessToken;

trait GetWorkloadAccessTokenTrait
{
    /**
     * @param GetWorkloadAccessTokenRequest $args
     * @return GetWorkloadAccessTokenResponse
     */
    public function getWorkloadAccessToken(GetWorkloadAccessTokenRequest $args)
    {
        $result = parent::getWorkloadAccessToken($args->toArray());
        return new GetWorkloadAccessTokenResponse($result->toArray());
    }
}
