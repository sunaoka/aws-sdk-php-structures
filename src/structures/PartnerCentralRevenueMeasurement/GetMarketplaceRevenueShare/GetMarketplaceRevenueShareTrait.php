<?php

namespace Sunaoka\Aws\Structures\PartnerCentralRevenueMeasurement\GetMarketplaceRevenueShare;

trait GetMarketplaceRevenueShareTrait
{
    /**
     * @param GetMarketplaceRevenueShareRequest $args
     * @return GetMarketplaceRevenueShareResponse
     */
    public function getMarketplaceRevenueShare(GetMarketplaceRevenueShareRequest $args)
    {
        $result = parent::getMarketplaceRevenueShare($args->toArray());
        return new GetMarketplaceRevenueShareResponse($result->toArray());
    }
}
