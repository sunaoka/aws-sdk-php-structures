<?php

namespace Sunaoka\Aws\Structures\PartnerCentralRevenueMeasurement\UpdateMarketplaceRevenueShareAllocation;

trait UpdateMarketplaceRevenueShareAllocationTrait
{
    /**
     * @param UpdateMarketplaceRevenueShareAllocationRequest $args
     * @return UpdateMarketplaceRevenueShareAllocationResponse
     */
    public function updateMarketplaceRevenueShareAllocation(UpdateMarketplaceRevenueShareAllocationRequest $args)
    {
        $result = parent::updateMarketplaceRevenueShareAllocation($args->toArray());
        return new UpdateMarketplaceRevenueShareAllocationResponse($result->toArray());
    }
}
