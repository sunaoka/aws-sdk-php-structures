<?php

namespace Sunaoka\Aws\Structures\PartnerCentralRevenueMeasurement\GetMarketplaceRevenueShareAllocation;

trait GetMarketplaceRevenueShareAllocationTrait
{
    /**
     * @param GetMarketplaceRevenueShareAllocationRequest $args
     * @return GetMarketplaceRevenueShareAllocationResponse
     */
    public function getMarketplaceRevenueShareAllocation(GetMarketplaceRevenueShareAllocationRequest $args)
    {
        $result = parent::getMarketplaceRevenueShareAllocation($args->toArray());
        return new GetMarketplaceRevenueShareAllocationResponse($result->toArray());
    }
}
