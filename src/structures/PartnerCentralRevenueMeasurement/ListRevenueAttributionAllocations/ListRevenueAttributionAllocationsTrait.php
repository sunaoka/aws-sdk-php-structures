<?php

namespace Sunaoka\Aws\Structures\PartnerCentralRevenueMeasurement\ListRevenueAttributionAllocations;

trait ListRevenueAttributionAllocationsTrait
{
    /**
     * @param ListRevenueAttributionAllocationsRequest $args
     * @return ListRevenueAttributionAllocationsResponse
     */
    public function listRevenueAttributionAllocations(ListRevenueAttributionAllocationsRequest $args)
    {
        $result = parent::listRevenueAttributionAllocations($args->toArray());
        return new ListRevenueAttributionAllocationsResponse($result->toArray());
    }
}
