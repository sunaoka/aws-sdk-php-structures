<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\BatchCreateWorkloadEstimateUsage;

trait BatchCreateWorkloadEstimateUsageTrait
{
    /**
     * @param BatchCreateWorkloadEstimateUsageRequest $args
     * @return BatchCreateWorkloadEstimateUsageResponse
     */
    public function batchCreateWorkloadEstimateUsage(BatchCreateWorkloadEstimateUsageRequest $args)
    {
        $result = parent::batchCreateWorkloadEstimateUsage($args->toArray());
        return new BatchCreateWorkloadEstimateUsageResponse($result->toArray());
    }
}
