<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\ListGatewayRateLimits;

trait ListGatewayRateLimitsTrait
{
    /**
     * @param ListGatewayRateLimitsRequest $args
     * @return ListGatewayRateLimitsResponse
     */
    public function listGatewayRateLimits(ListGatewayRateLimitsRequest $args)
    {
        $result = parent::listGatewayRateLimits($args->toArray());
        return new ListGatewayRateLimitsResponse($result->toArray());
    }
}
