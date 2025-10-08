<?php

namespace Sunaoka\Aws\Structures\FreeTier\GetFreeTierUsage;

trait GetFreeTierUsageTrait
{
    /**
     * @param GetFreeTierUsageRequest $args
     * @return GetFreeTierUsageResponse
     */
    public function getFreeTierUsage(GetFreeTierUsageRequest $args)
    {
        $result = parent::getFreeTierUsage($args->toArray());
        return new GetFreeTierUsageResponse($result->toArray());
    }
}
