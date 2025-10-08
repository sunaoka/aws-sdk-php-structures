<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\BatchUpdateWorkloadEstimateUsage;

trait BatchUpdateWorkloadEstimateUsageTrait
{
    /**
     * @param BatchUpdateWorkloadEstimateUsageRequest $args
     * @return BatchUpdateWorkloadEstimateUsageResponse
     */
    public function batchUpdateWorkloadEstimateUsage(BatchUpdateWorkloadEstimateUsageRequest $args)
    {
        $result = parent::batchUpdateWorkloadEstimateUsage($args->toArray());
        return new BatchUpdateWorkloadEstimateUsageResponse($result->toArray());
    }
}
