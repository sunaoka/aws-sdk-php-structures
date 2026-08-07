<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateGatewayRateLimit;

trait CreateGatewayRateLimitTrait
{
    /**
     * @param CreateGatewayRateLimitRequest $args
     * @return CreateGatewayRateLimitResponse
     */
    public function createGatewayRateLimit(CreateGatewayRateLimitRequest $args)
    {
        $result = parent::createGatewayRateLimit($args->toArray());
        return new CreateGatewayRateLimitResponse($result->toArray());
    }
}
