<?php

namespace Sunaoka\Aws\Structures\PartnerCentralRevenueMeasurement\ListMarketplaceRevenueShareAllocations;

trait ListMarketplaceRevenueShareAllocationsTrait
{
    /**
     * @param ListMarketplaceRevenueShareAllocationsRequest $args
     * @return ListMarketplaceRevenueShareAllocationsResponse
     */
    public function listMarketplaceRevenueShareAllocations(ListMarketplaceRevenueShareAllocationsRequest $args)
    {
        $result = parent::listMarketplaceRevenueShareAllocations($args->toArray());
        return new ListMarketplaceRevenueShareAllocationsResponse($result->toArray());
    }
}
