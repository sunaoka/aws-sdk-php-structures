<?php

namespace Sunaoka\Aws\Structures\PartnerCentralRevenueMeasurement\CreateMarketplaceRevenueShareAllocation;

trait CreateMarketplaceRevenueShareAllocationTrait
{
    /**
     * @param CreateMarketplaceRevenueShareAllocationRequest $args
     * @return CreateMarketplaceRevenueShareAllocationResponse
     */
    public function createMarketplaceRevenueShareAllocation(CreateMarketplaceRevenueShareAllocationRequest $args)
    {
        $result = parent::createMarketplaceRevenueShareAllocation($args->toArray());
        return new CreateMarketplaceRevenueShareAllocationResponse($result->toArray());
    }
}
