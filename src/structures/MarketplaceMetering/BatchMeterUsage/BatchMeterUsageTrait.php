<?php

namespace Sunaoka\Aws\Structures\MarketplaceMetering\BatchMeterUsage;

trait BatchMeterUsageTrait
{
    /**
     * @param BatchMeterUsageRequest $args
     * @return BatchMeterUsageResponse
     */
    public function batchMeterUsage(BatchMeterUsageRequest $args)
    {
        $result = parent::batchMeterUsage($args->toArray());
        return new BatchMeterUsageResponse($result->toArray());
    }
}
