<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\BatchPutGatewayRateLimits;

trait BatchPutGatewayRateLimitsTrait
{
    /**
     * @param BatchPutGatewayRateLimitsRequest $args
     * @return BatchPutGatewayRateLimitsResponse
     */
    public function batchPutGatewayRateLimits(BatchPutGatewayRateLimitsRequest $args)
    {
        $result = parent::batchPutGatewayRateLimits($args->toArray());
        return new BatchPutGatewayRateLimitsResponse($result->toArray());
    }
}
