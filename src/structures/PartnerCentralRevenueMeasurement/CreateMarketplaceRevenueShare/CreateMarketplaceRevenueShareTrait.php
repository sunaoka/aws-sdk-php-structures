<?php

namespace Sunaoka\Aws\Structures\PartnerCentralRevenueMeasurement\CreateMarketplaceRevenueShare;

trait CreateMarketplaceRevenueShareTrait
{
    /**
     * @param CreateMarketplaceRevenueShareRequest $args
     * @return CreateMarketplaceRevenueShareResponse
     */
    public function createMarketplaceRevenueShare(CreateMarketplaceRevenueShareRequest $args)
    {
        $result = parent::createMarketplaceRevenueShare($args->toArray());
        return new CreateMarketplaceRevenueShareResponse($result->toArray());
    }
}
