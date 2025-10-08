<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\BatchDeleteWorkloadEstimateUsage;

trait BatchDeleteWorkloadEstimateUsageTrait
{
    /**
     * @param BatchDeleteWorkloadEstimateUsageRequest $args
     * @return BatchDeleteWorkloadEstimateUsageResponse
     */
    public function batchDeleteWorkloadEstimateUsage(BatchDeleteWorkloadEstimateUsageRequest $args)
    {
        $result = parent::batchDeleteWorkloadEstimateUsage($args->toArray());
        return new BatchDeleteWorkloadEstimateUsageResponse($result->toArray());
    }
}
