<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\DeleteGatewayRateLimit;

trait DeleteGatewayRateLimitTrait
{
    /**
     * @param DeleteGatewayRateLimitRequest $args
     * @return DeleteGatewayRateLimitResponse
     */
    public function deleteGatewayRateLimit(DeleteGatewayRateLimitRequest $args)
    {
        $result = parent::deleteGatewayRateLimit($args->toArray());
        return new DeleteGatewayRateLimitResponse($result->toArray());
    }
}
