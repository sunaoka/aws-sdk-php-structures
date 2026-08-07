<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateGatewayRateLimit;

trait UpdateGatewayRateLimitTrait
{
    /**
     * @param UpdateGatewayRateLimitRequest $args
     * @return UpdateGatewayRateLimitResponse
     */
    public function updateGatewayRateLimit(UpdateGatewayRateLimitRequest $args)
    {
        $result = parent::updateGatewayRateLimit($args->toArray());
        return new UpdateGatewayRateLimitResponse($result->toArray());
    }
}
