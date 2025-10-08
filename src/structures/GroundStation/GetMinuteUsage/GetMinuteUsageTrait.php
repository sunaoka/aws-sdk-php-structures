<?php

namespace Sunaoka\Aws\Structures\GroundStation\GetMinuteUsage;

trait GetMinuteUsageTrait
{
    /**
     * @param GetMinuteUsageRequest $args
     * @return GetMinuteUsageResponse
     */
    public function getMinuteUsage(GetMinuteUsageRequest $args)
    {
        $result = parent::getMinuteUsage($args->toArray());
        return new GetMinuteUsageResponse($result->toArray());
    }
}
