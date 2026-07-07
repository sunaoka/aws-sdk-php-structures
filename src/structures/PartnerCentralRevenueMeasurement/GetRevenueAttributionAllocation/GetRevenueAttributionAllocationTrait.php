<?php

namespace Sunaoka\Aws\Structures\PartnerCentralRevenueMeasurement\GetRevenueAttributionAllocation;

trait GetRevenueAttributionAllocationTrait
{
    /**
     * @param GetRevenueAttributionAllocationRequest $args
     * @return GetRevenueAttributionAllocationResponse
     */
    public function getRevenueAttributionAllocation(GetRevenueAttributionAllocationRequest $args)
    {
        $result = parent::getRevenueAttributionAllocation($args->toArray());
        return new GetRevenueAttributionAllocationResponse($result->toArray());
    }
}
