<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\ListWorkloadEstimateUsage;

trait ListWorkloadEstimateUsageTrait
{
    /**
     * @param ListWorkloadEstimateUsageRequest $args
     * @return ListWorkloadEstimateUsageResponse
     */
    public function listWorkloadEstimateUsage(ListWorkloadEstimateUsageRequest $args)
    {
        $result = parent::listWorkloadEstimateUsage($args->toArray());
        return new ListWorkloadEstimateUsageResponse($result->toArray());
    }
}
