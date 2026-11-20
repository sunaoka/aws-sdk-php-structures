<?php

namespace Sunaoka\Aws\Structures\PartnerCentralRevenueMeasurement\UpdateMarketplaceRevenueShare;

trait UpdateMarketplaceRevenueShareTrait
{
    /**
     * @param UpdateMarketplaceRevenueShareRequest $args
     * @return UpdateMarketplaceRevenueShareResponse
     */
    public function updateMarketplaceRevenueShare(UpdateMarketplaceRevenueShareRequest $args)
    {
        $result = parent::updateMarketplaceRevenueShare($args->toArray());
        return new UpdateMarketplaceRevenueShareResponse($result->toArray());
    }
}
