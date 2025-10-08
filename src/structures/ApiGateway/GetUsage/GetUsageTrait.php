<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetUsage;

trait GetUsageTrait
{
    /**
     * @param GetUsageRequest $args
     * @return GetUsageResponse
     */
    public function getUsage(GetUsageRequest $args)
    {
        $result = parent::getUsage($args->toArray());
        return new GetUsageResponse($result->toArray());
    }
}
