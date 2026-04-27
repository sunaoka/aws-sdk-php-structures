<?php

namespace Sunaoka\Aws\Structures\Kms\GetKeyLastUsage;

trait GetKeyLastUsageTrait
{
    /**
     * @param GetKeyLastUsageRequest $args
     * @return GetKeyLastUsageResponse
     */
    public function getKeyLastUsage(GetKeyLastUsageRequest $args)
    {
        $result = parent::getKeyLastUsage($args->toArray());
        return new GetKeyLastUsageResponse($result->toArray());
    }
}
