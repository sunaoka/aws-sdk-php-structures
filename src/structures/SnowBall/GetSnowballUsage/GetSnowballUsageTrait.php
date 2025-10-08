<?php

namespace Sunaoka\Aws\Structures\SnowBall\GetSnowballUsage;

trait GetSnowballUsageTrait
{
    /**
     * @param GetSnowballUsageRequest $args
     * @return GetSnowballUsageResponse
     */
    public function getSnowballUsage(GetSnowballUsageRequest $args)
    {
        $result = parent::getSnowballUsage($args->toArray());
        return new GetSnowballUsageResponse($result->toArray());
    }
}
