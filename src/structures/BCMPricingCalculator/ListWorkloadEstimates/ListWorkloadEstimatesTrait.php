<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\ListWorkloadEstimates;

trait ListWorkloadEstimatesTrait
{
    /**
     * @param ListWorkloadEstimatesRequest $args
     * @return ListWorkloadEstimatesResponse
     */
    public function listWorkloadEstimates(ListWorkloadEstimatesRequest $args)
    {
        $result = parent::listWorkloadEstimates($args->toArray());
        return new ListWorkloadEstimatesResponse($result->toArray());
    }
}
