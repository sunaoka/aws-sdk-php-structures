<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetGatewayRateLimit;

trait GetGatewayRateLimitTrait
{
    /**
     * @param GetGatewayRateLimitRequest $args
     * @return GetGatewayRateLimitResponse
     */
    public function getGatewayRateLimit(GetGatewayRateLimitRequest $args)
    {
        $result = parent::getGatewayRateLimit($args->toArray());
        return new GetGatewayRateLimitResponse($result->toArray());
    }
}
