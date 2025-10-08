<?php

namespace Sunaoka\Aws\Structures\MarketplaceMetering\RegisterUsage;

trait RegisterUsageTrait
{
    /**
     * @param RegisterUsageRequest $args
     * @return RegisterUsageResponse
     */
    public function registerUsage(RegisterUsageRequest $args)
    {
        $result = parent::registerUsage($args->toArray());
        return new RegisterUsageResponse($result->toArray());
    }
}
