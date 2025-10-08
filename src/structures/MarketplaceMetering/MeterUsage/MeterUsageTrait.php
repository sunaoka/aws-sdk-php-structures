<?php

namespace Sunaoka\Aws\Structures\MarketplaceMetering\MeterUsage;

trait MeterUsageTrait
{
    /**
     * @param MeterUsageRequest $args
     * @return MeterUsageResponse
     */
    public function meterUsage(MeterUsageRequest $args)
    {
        $result = parent::meterUsage($args->toArray());
        return new MeterUsageResponse($result->toArray());
    }
}
