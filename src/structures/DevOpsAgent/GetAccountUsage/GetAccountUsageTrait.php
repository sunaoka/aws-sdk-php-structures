<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\GetAccountUsage;

trait GetAccountUsageTrait
{
    /**
     * @param GetAccountUsageRequest $args
     * @return GetAccountUsageResponse
     */
    public function getAccountUsage(GetAccountUsageRequest $args)
    {
        $result = parent::getAccountUsage($args->toArray());
        return new GetAccountUsageResponse($result->toArray());
    }
}
